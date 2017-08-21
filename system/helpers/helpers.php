<?php  

function redirect($url = '')
{
	// $url = 'http://localhost/php_3_pm/ecommerce/index.php/admin/dashboard';

	$location = ROOT_URL . '/index.php/' . $url;

	header('location: ' . $location);
	die;
}

function create_url($url = '')
{
	// $url = 'http://localhost/php_3_pm/ecommerce/index.php/admin/dashboard';

	$location = ROOT_URL . '/index.php/' . $url;

	return $location;
}



function debug($_arr, $_die = 0, $_vd = 0)
{
	echo '<pre style="color: orange">';

	if($_vd) {
		var_dump($_arr);
	} else {
		print_r($_arr);
	}

	if($_die) {
		die;	
	}

	echo '</pre>';
}

function parseUrl()
{
	// default controller and action
	$controller = 'default';
	$action = 'index';
	$segment_parts = array();
	// $obj = new Request();
	// Reflections


	// http://localhost/php_3_pm/ecommerce/index.php/product/index
	// debug($_SERVER);
	$request_uri = trim($_SERVER['REQUEST_URI'], '/');

	$getparameters = $_GET;
	// debug($getparameters);

	$request_uri = $_SERVER['REQUEST_URI'];

	$request_uri = str_replace('?pg=1', '', $request_uri);
	// echo $_req_uri;

	
	$url_segments = explode('/', $request_uri);


	$index_key = array_search('index.php', $url_segments);

	if($index_key > 0) {
		$seg_arr = array();
		$size = sizeof($url_segments);
		for($i = $index_key + 1; $i < $size; $i++)
		{
			$seg_arr[] = $url_segments[$i];
		}

		// debug($seg_arr);
// die;


		if($seg_arr) {
			// debug($seg_arr);
				// echo count($seg_arr);
				// die;
			if(count($seg_arr) > 2) {
				$controller = isset($seg_arr[0]) ? $seg_arr[0] : $controller;
				$action = isset($seg_arr[1]) ? $seg_arr[1] : $action;
				unset($seg_arr[0]);
				unset($seg_arr[1]);
				
				$segment_parts = array_values($seg_arr);	
			} else {
				
				if(isset($seg_arr[0]) && $seg_arr[0]) {
					$controller =  $seg_arr[0];
				}
				
				if(isset($seg_arr[1]) && $seg_arr[1]) {
					$action =  $seg_arr[1];	
				}
					
			}
			
		}
	}

	
	
	
	$segments = array(
		'controller'	=>	$controller,
		'action'		=>	$action,
		'segment_parts'	=>	array(
				$segment_parts,
				'getparams'		=>	$getparameters
			),
		);

	return $segments;
}

function route()
{
	// default controller & default action
	$seg = parseUrl();

	
	// debug($seg);

	
	// if(isset($_GET['controller']) && $_GET['controller']) {
	// 	$controller = $_GET['controller'];
	// }

	// if(isset($_GET['action']) && $_GET['action']) {
	// 	$action = $_GET['action'];
	// }

	$controller = $seg['controller'];
	$action = $seg['action'];

	// include controller path
	$file = 'app/controllers/' . $controller . '.php';
	if(is_file($file)) {
		include_once $file;	

		$controllerclass = ucfirst($controller) . 'Controller';

		
	} else {
		include_once AC_PATH . '/error.php';

		$controllerclass = 'ErrorController';
	}

	// Object of controller
	$obj = new $controllerclass();

	if(method_exists($obj, $action)) {
		
		

		// call action
		$obj->$action($seg['segment_parts']);
	} else {
		include_once AC_PATH . '/error.php';
		$obj = new ErrorController();

		$obj->methodnotfound();
		
	}
	

	

		

}
function adminauthenticate()
{
	if(!isset($_SESSION[UNIQUEID]['admin']['user_id'])) {
			$_SESSION['status']['error'] = 'Please log in to access this page';
			redirect('admin/login');
		}
}


function get_categories()
{
	
	include_once MOD_PATH . '/categorymodel.php';

	$categorymodel = new CategoryModel();

	$categories = $categorymodel->findAll();

	// debug($categories);
	return $categories;
}