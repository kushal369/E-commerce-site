<?php 

class CartController extends Controller
{
	public $cartlib;
	

	public function __construct()
	{
		parent::__construct();
		
		$this->cartlib = $this->load->library('cart');
	}
	public function index()
	{
		// listing

		debug($this->cartlib->items());
	}

	public function add($segments)
	{
		$pid = $segments[0][0];
		$productmodel = $this->load->model('productmodel');
		$detail = $productmodel->findById($pid);		

		$item = array(
			'id'		=>	$detail['pid'],
			'name'		=>	$detail['pname'],
			'price'		=>	$detail['pprice'],
			'qty'		=>	1
		);

		// debug($item);

		// $objCart = new Cart();

		
		
		// debug($cartlib);
		$this->cartlib->insert($item);

		redirect('cart/index');
	}

	public function update()
	{

	}

	public function delete()
	{

	}
}