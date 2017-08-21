<?php 

class ProductModel extends Model 
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	// public function hello()
	// {
	// 	$this->hello();
	// }

	public function findById($pid)
	{
		$sql = "SELECT * FROM product WHERE pid='{$pid}'";
		return $this->db->querySingle($sql);	
	}

	//public function findUser($username, $password)
	//{
	//	$sql = "SELECT * FROM user WHERE username = '{$username}' AND password='{$password}'";
	//	$data = $this->db->querySingle($sql);

	//	return $data;
	//}

	public function findAll()
	{
		$sql = "SELECT * FROM product";

		$data = $this->db->queryAll($sql);

		return $data;
	}

	public function save($data)
	{
		$sql = "INSERT INTO product (pname, pdesc, pprice, cid, pimage) VALUES ('{$data['pname']}', '{$data['pdesc']}', '{$data['pprice']}', '{$data['cid']}', '{$data['pimage']}')";

		$status = $this->db->execute($sql);
		return $status;
	}

	public function update($data, $pid)
	{
	  $sql = "UPDATE product SET cid='{$data['cid']}', pimage='{$data['pimage']}', pname='{$data['pname']}', pdesc='{$data['pdesc']}', pprice='{$data['pprice']}' WHERE pid='$pid'";

		$status = $this->db->execute($sql);
		return $status;
	}

	public function delete($pid)
	{
		$sql = "DELETE FROM product WHERE pid = '{$pid}'";

		return $this->db->execute($sql);
	}

	public function getProducts($cid = '')
	{
		$sql = "SELECT * FROM product WHERE pstatus='1' "; 

		if($cid) {                      // this concept of query concatenation is very applicable and important
			$sql .= " AND cid='{$cid}'";	
		}
		

		// echo $sql;
		// die;



		$data = $this->db->queryAll($sql);

		return $data;
	}
	public function getProductsdetail($pid = '')
	{
		$sql = "SELECT * FROM product WHERE pstatus='1' "; 

		if($pid) {                      // this concept of query concatenation is very applicable and important
			$sql .= " AND pid='{$pid}'";	
		}
		

		// echo $sql;
		// die;



		$data = $this->db->queryAll($sql);

		return $data;
	}
  

	public function updatestatusdown($pid)
	{
         $sql = "UPDATE product SET pstatus='0' WHERE pid='$pid'";
         return $this->db->execute($sql);
	}

	public function updatestatusup($pid)
	{
         $sql = "UPDATE product SET pstatus='1' WHERE pid='$pid'";
         return $this->db->execute($sql);
	}

}