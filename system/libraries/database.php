<?php 

class Database
{
	public $link;

	public function __construct()
	{
		
		$dbconfig = include ROOT_PATH . '/config/database.php';

		// debug($dbconfig);

		$this->connect($dbconfig);


	}

	private function connect($db)
	{

		// echo 'connecting';
		// $link = mysqli_connect(host, user, password, database);
		$this->link = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['db']);

		// echo '<pre>';
		// print_r($link);

		// if($link->errno === 0) {
		//     echo 'connection successful';
		// } else {
		//     echo 'connection error';
		// }
	}

	// query to get single record (single row)
	public function querySingle($sql)
	{
		$res = mysqli_query($this->link, $sql);

		$data = mysqli_fetch_assoc($res);

		return $data;
	}

	// query for multiple row of records
	public function queryAll($sql)
	{
		$res = mysqli_query($this->link, $sql);

		$data = array();
		while($row = mysqli_fetch_assoc($res)) 
		{
			$data[] = $row;
		}

		return $data;
	}

	public function execute($sql)
	{
		// echo 'execute called';
		// die;
		return mysqli_query($this->link, $sql);
	}
}