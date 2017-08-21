<?php 

class DefaultController extends Controller
{
	private $productmodel;
	public function __construct()
	{
		parent::__construct();

		$this->productmodel = $this->load->model('productmodel');
	}

	public function index($segments)
	{
		// debug($segments);
		$cid = '';
		if(isset($segments[0][0])) {
			$cid = $segments[0][0];			
		}
		// echo '<br>index action of default controller';
		// include_once 'app/views/default.php';

		// print_r($this->load);
		// $this->load->view('default');

		// $defaultmodel = $this->load->model('defaultmodel');

		// $persons = $defaultmodel->getData();

		// $users = $defaultmodel->getUser();
		
		// $data = array(
		// 	'persons'=> $persons,
		// 	'users'	=>	$users
		// );



		$products = $this->productmodel->getProducts($cid);

		// debug($products, 1);

		$data = array(
				'products'	=>	$products
			);

		Loader::view('frontend/default', $data);
	}

	public function detail($segments)
	{
		$pid  = $segments[0][0];

		$products = $this->productmodel->getProductsdetail($pid);

		// debug($products, 1);

		$data = array(
				'products'	=>	$products
			);

		
		loader::view('frontend/productdetail',$data);

	}

	public function contact()
	{
		Loader::view('frontend/contact');
	}
}