<?php 

class CategoryController extends Controller 
{
	private $categorymodel;

	public function __construct()
	{
		parent::__construct();

		$this->categorymodel = $this->load->model('categorymodel');
	}

	public function index()
	{
	
	adminauthenticate();
	
		$records = $this->categorymodel->findAll();

		$data = array(
			'records'	=>	$records
		);

		Loader::view('admin/category/list', $data);
	}

	public function add()
	{
		adminauthenticate();
		$error = array();
		if($_POST) {
			if(isset($_POST['categoryname']) && $_POST['categoryname']){
			$cname = $_POST['categoryname'];
		}else
		{
			$_SESSION['status']['error'] = "Category Name can't be empty!!!";
			redirect('category/add');
		}
		 if(isset($_POST['categorydetail']) && $_POST['categorydetail']){
			$cdetail = $_POST['categorydetail'];
		}else
		{
			$_SESSION['status']['error'] = "Category Detail must be provided!!!";
			redirect('category/add');
		}	
			
			
			$categorydata = array(
				'cname'		=>	$cname,
				'cdetail'	=>	$cdetail
				
				);

			$status = $this->categorymodel->save($categorydata);

			if($status) {
				$_SESSION['status']['success'] = 'Successfully inserted';
				redirect('category/add');
			} else {
				$_SESSION['status']['error'] = 'Error inserting';
				redirect('category/add');
			}

		}
		

		$data = array();
		Loader::view('admin/category/add', $data);
	}

	public function delete($segments)
	{
		adminauthenticate();
		//debug($segments);
		$cid = $segments[0][0];
		$status = $this->categorymodel->delete($cid);
		if($status) {
			$_SESSION['status']['success'] = 'Successfully deleted';
		} else {
			$_SESSION['status']['error'] = 'Error Deleting';
				
		}

		redirect('category/index');
	
	}
	


	public function edit($segments)
	{
		adminauthenticate();
		$data = array();

		$cid= $segments[0][0];

		$categoryinfo = $this->categorymodel->findById($cid);


		if($_POST) {
			$categorydata = array();
			$categorydata['cname'] = $_POST['categoryname'];
			$categorydata['cdetail'] = $_POST['categorydetail'];
			

			$status = $this->categorymodel->update($categorydata, $cid);

			if($status) {
				$_SESSION['status']['success'] = 'Successfully updated';
			} else {
				$_SESSION['status']['error'] = 'Error updating';		
			}

			redirect('category/edit/' . $cid);

		}

		$data['categoryinfo'] = $categoryinfo;

		Loader::view('admin/category/edit', $data);
	}
	


	


}