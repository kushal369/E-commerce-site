<?php 

class ErrorController extends Controller 
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$error = array(
			'code'	=>	'404',
			'message'	=>	'Page not found'
		);

		Loader::view('404', $error);
	}

	public function methodnotfound()
	{
		$error = array(
			'code'	=>	'404',
			'message'	=>	'Action not found'
		);
		
		Loader::view('404', $error);
	}
}