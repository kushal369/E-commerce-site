<?php 

class UserController extends Controller 
{
	private $usermodel;

	public function __construct()
	{
		parent::__construct();

		$this->usermodel = $this->load->model('usermodel');
	}

	public function index()
	{
		adminauthenticate();
		
		$records = $this->usermodel->findAll();

		$data = array(
			'records'	=>	$records
		);

		Loader::view('admin/user/list', $data);
	}

	public function add()
	{
		adminauthenticate();
		$error = array();
		if($_POST) {
			 if(isset($_POST['username']) && $_POST['username']){
			$username = $_POST['username'];
		}else
		{
			$_SESSION['status']['error'] = "UserName can't be empty!!!";
			redirect('user/add');
		}
		 if(isset($_POST['password']) && $_POST['password']){
			$password = sha1($_POST['password']);
		}else
		{
			$_SESSION['status']['error'] = "Password can't be empty!!!";
			redirect('user/add');
		}
			if(isset($_POST['name']) && $_POST['name']){
			$name = $_POST['name'];
		}else
		{
			$_SESSION['status']['error'] = 'Name must be provided!!!';
			redirect('user/add');
		}
		    if(isset($_POST['address']) && $_POST['address']){
			$address = $_POST['address'];
		}else
		{
			$_SESSION['status']['error'] = 'Address must be provided!!!';
			redirect('user/add');
		}
		   
		   
			

			$userdata = array(
				'name'		=>	$name,
				'address'	=>	$address,
				'username'	=>	$username,
				'password'	=>	$password
				);

			$status = $this->usermodel->save($userdata);

			if($status) {
				$_SESSION['status']['success'] = 'Successfully inserted';
				redirect('user/add');
			} else {
				$_SESSION['status']['error'] = 'Error inserting';
				redirect('user/add');
			}

		}
		
        
		$data = array();
			
		
		Loader::view('admin/user/add', $data);
	}

	public function delete($segments)
	{
		adminauthenticate();
		// debug($segments);
		$user_id = $segments[0][0];

		$status = $this->usermodel->delete($user_id);

		if($status) {
			$_SESSION['status']['success'] = 'Successfully deleted';
		} else {
			$_SESSION['status']['error'] = 'Error Deleting';
				
		}

		redirect('user/index');
	}


	public function edit($segments)
	{
		adminauthenticate();
		$data = array();

		$user_id = $segments[0][0];

		$userinfo = $this->usermodel->findById($user_id);


		if($_POST) {
			$userdata = array();
			$userdata['username'] = $_POST['username'];
			$userdata['address'] = $_POST['address'];
			$userdata['name'] = $_POST['name'];

			$status = $this->usermodel->update($userdata, $user_id);

			if($status) {
				$_SESSION['status']['success'] = 'Successfully updated';
			} else {
				$_SESSION['status']['error'] = 'Error updating';		
			}

			redirect('user/edit/' . $user_id);

		}

		$data['userinfo'] = $userinfo;

		Loader::view('admin/user/edit', $data);
	}
	


		

	public function changepassword()
	{
		adminauthenticate();
		
		if($_POST) {
			//debug($_SESSION);
			// die;
			$opassword = sha1($_POST['opassword']);
			// echo $opassword;
			// die;
			$npassword = sha1($_POST['npassword']);
			$cnpassword = sha1($_POST['cnpassword']);

			$userid = $_SESSION[UNIQUEID]['admin']['user_id'];

			// find if user's old password is matched or not
			$uinfo = $this->usermodel->findUserByPassword($userid, $opassword);

			// debug($uinfo, 1);

			if($uinfo) {
				// check if new password and connfirm new password match or not
				
				
				    if($npassword === $cnpassword && $_POST['npassword']) {
					// // update new password
					      $status = $this->usermodel->updatePassword($userid, $npassword);

					      if($status) {
						        $_SESSION['status']['success'] = 'Successfully Changed';
						
					                  } else {
						                      $_SESSION['status']['error'] = 'Password cannot be changed at this moment, please try again later';
					                          }
					            redirect('user/changepassword');
					
				                      } else {
					                          $_SESSION['status']['error'] = "New password and Confirm new password mismatch OR You provided null password(which can't be accepted ) .";
					                          redirect('user/changepassword');
				                              }
			                          } 
			                          else {
				// old password mismatch
				                              $_SESSION['status']['error'] = 'Old password is not matched';
				                              redirect('user/changepassword');
			                                   }
		        
		


		        }
		Loader::view('admin/user/changepassword');
	}
	




}