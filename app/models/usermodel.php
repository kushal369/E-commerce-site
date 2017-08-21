<?php 

class UserModel extends Model 
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	// public function hello()
	// {
	// 	$this->hello();
	// }

	public function updatePassword($user_id, $password)
	{
		$sql = "UPDATE user 
				SET 
				password='{$password}' 
				WHERE 
				user_id='{$user_id}'";
		return $this->db->execute($sql);
	}

	public function findUserByPassword($user_id, $password)
	{
		$sql = "SELECT * FROM user WHERE user_id='{$user_id}' AND password='{$password}'";
		return $this->db->querySingle($sql);		
	}


	public function findUser($username, $password)
	{
		$sql = "SELECT * FROM user WHERE username = '{$username}' AND password='{$password}'";
		$data = $this->db->querySingle($sql);

		return $data;
	}

		public function findById($user_id)
	{
		$sql = "SELECT * FROM user WHERE user_id='{$user_id}'";
		return $this->db->querySingle($sql);	
	}


	public function findAll()
	{
		$sql = "SELECT * FROM user";

		$data = $this->db->queryAll($sql);

		return $data;
	}

	public function save($userdata)
	{
		$sql = "INSERT INTO user (username, password, name, address) VALUES ('{$userdata['username']}', '{$userdata['password']}', '{$userdata['name']}', '{$userdata['address']}')";

		$status = $this->db->execute($sql);
		return $status;
	}

	public function update($data, $user_id)
	{
		$sql = "UPDATE user SET username='{$data['username']}', name='{$data['name']}', address='{$data['address']}' WHERE user_id='$user_id'";

		$status = $this->db->execute($sql);
		return $status;
	}

	public function delete($user_id)
	{
		$sql = "DELETE FROM user WHERE user_id = '{$user_id}'";

		return $this->db->execute($sql);
	}

	
}