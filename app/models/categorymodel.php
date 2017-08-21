<?php 

class CategoryModel extends Model 
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	// public function hello()
	// {
	// 	$this->hello();
	// }
	public function findCategory($cname)
	{
		$sql = "SELECT * FROM category WHERE cname = '{$cname}'";
		$data = $this->db->querySingle($sql);

		return $data;
	}

		public function findById($cid)
	{
		$sql = "SELECT * FROM category WHERE cid='{$cid}'";
		return $this->db->querySingle($sql);	
	}


	public function findAll()
	{
		$sql = "SELECT * FROM category";

		$data = $this->db->queryAll($sql);

		return $data;
	}

	public function save($categorydata)
	{
		$sql = "INSERT INTO category (cname, cdetail) VALUES ('{$categorydata['cname']}', '{$categorydata['cdetail']}')";

		$status = $this->db->execute($sql);
		return $status;
	}

	public function delete($cid)
	{
		$sql = "DELETE FROM category WHERE cid = '{$cid}'";

		return $this->db->execute($sql);
	}



		public function update($data, $cid)
	{
		$sql = "UPDATE category SET cname='{$data['cname']}', cdetail ='{$data['cdetail']}' WHERE cid='$cid'";

		$status = $this->db->execute($sql);
		return $status;
	}

}