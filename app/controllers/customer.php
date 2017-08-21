<?php 

class CustomerController extends Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo 'index action of customer controller';
	}

	public function signup()
	{
		Loader::view('frontend/customer/signup');
	}

	public function contactus()
	{
		loader::view('frontend/contact');
	}
}