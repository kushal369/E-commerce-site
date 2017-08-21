<?php 

class AdminController extends Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// session_destroy();
		$usermodel = $this->load->model('usermodel');

		$error = array();
		if($_POST) {
			if(isset($_POST['username']) && $_POST['username']) {
				$username = $_POST['username'];
			} else {
				$error['username'] =' Username must not be empty!!!';
			}

			if(isset($_POST['password']) && $_POST['password']) {
				$password = sha1($_POST['password']);
			} else {
				$error['password'] = ' Password must not be empty!!!';
			}
			
			
			if(!$error) {
				$user = $usermodel->findUser($username, $password);

				if($user) {
					$_SESSION[UNIQUEID]['admin']['user_id'] = $user['user_id'];

					redirect('admin/dashboard/' .$user['user_id']);
				} else {
					$_SESSION['status']['error'] = "Invalid Username or Password";

					redirect('admin/index');
				}

			} 
			
			// debug($user);
		}

		$data = array(
			'error'	=>	$error
		);

		Loader::view('admin/login', $data);
	}

	public function login()
	{
		redirect('admin/index');
	}

	public function dashboard()
	{
		adminauthenticate();
		$data = array();
		
		Loader::view('admin/dashboard', $data);
	}

	public function logout()
	{

		unset($_SESSION[UNIQUEID]['admin']);
		redirect('admin/login');
	}
}