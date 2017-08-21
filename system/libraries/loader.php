<?php 
class Loader
{
	public function __construct()
	{
		// echo 'constructor of loader class';
	}

	public function hello()
	{

	}
	
	public static function view($view, $data = array())
	{
		$file = VIEW_PATH . '/' . $view . '.php';
		if(is_file($file)) {
			include_once $file;
		} else {
			$data['code'] = '404';
			$data['message'] = 'View <strong>' . $view . '</strong> not found';
			include_once VIEW_PATH . '/404.php';
		}
	}
	public function library($class)
	{
		return new $class();
	}

	public function model($model)
	{
		$modelfile = MOD_PATH . '/' . $model . '.php';

		if(is_file($modelfile)) {
			include_once $modelfile;

			// before calling object of class $model, try to check if class exists or not.
			// todo
			// if() {
				// do yourself
				$m = new $model();
				return $m;
			// }
		} else {
			$data['code'] = '404';
			$data['message'] = 'Model <strong>' . $model . '</strong> not found';
			include_once VIEW_PATH . '/404.php';
		}
		
	}
}

// $obj = new Loader();
// $obj->hello();
// Loader::view();
