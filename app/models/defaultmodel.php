<?php 

class DefaultModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getData()
	{
		$persons = array(
			'p1'	=>	'ram',
			'p2'	=>	'shyam'
		);

		return $persons;
	}

	public function getUser()
	{	
		$sql = "SELECT * FROM user";
		$data = $this->db->queryAll($sql);

		return $data;
	}
}