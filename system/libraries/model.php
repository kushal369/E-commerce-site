<?php 

class Model 
{
	public $db;
	public function __construct()
	{
		// echo 'constructor of Model class is called';	
		$this->db = new Database();
	}

	public function hello()
	{
		
	}


}