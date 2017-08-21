<?php 

class ProductController extends Controller 
{
	private $productmodel;
	private $categorymodel;

	public function __construct()
	{
		parent::__construct();

		$this->productmodel = $this->load->model('productmodel');
		$this->categorymodel = $this->load->model('categorymodel');
	}

	public function index()
	{
		adminauthenticate();
		$records = $this->productmodel->findAll();


		$data = array(
			'records'	=>	$records
		);

		Loader::view('admin/product/list', $data);
	}

	public function add()
	{
		adminauthenticate();
		$error = array();
		if($_POST) {
			if(isset($_POST['pname']) && $_POST['pname']){
			$pname = $_POST['pname'];
		}else
		{
			$_SESSION['status']['error'] = "Product Name can't be empty!!!";
			redirect('product/add');
		}
		if(isset($_POST['pdesc']) && $_POST['pdesc']){
			$pdesc = $_POST['pdesc'];
		}else
		{
			$_SESSION['status']['error'] = "Product Description can't be empty!!!";
			redirect('product/add');
		}

		if(isset($_POST['pprice']) && $_POST['pprice']){
			$pprice = $_POST['pprice'];
		}else
		{
			$_SESSION['status']['error'] = "Product Price should be given!!!";
			redirect('product/add');
		}
			
			
		
			$cid = $_POST['cid'];
			$pimage = '';

			
		

			// image task
			// debug($_POST);
			// debug($_FILES);

			if($_FILES['pimage']['error'] > 0) {
				$_SESSION['status']['error'] = "Product Image should be provided!!!";
			redirect('product/add');
				// $error['pimage'] = 'Please choose image';
			} else {
				$filetype = $_FILES['pimage']['type'];
				$type = array(
					'image/png',
					'image/jpg',
					'image/jpeg'
				);

				if(in_array($filetype, $type)) {
					echo $pimage = time() . '_' . $_FILES['pimage']['name'];

					$destination = ROOT_PATH . '/uploads/images/' . $pimage;

					move_uploaded_file($_FILES['pimage']['tmp_name'], $destination);
					$productdata = array(
					'cid'	=>	$cid,
					'pname'		=>	$pname,
					'pdesc'	=>	$pdesc,
					'pprice'	=>	$pprice,
					'pimage'	=>	$pimage
					);

					$status = $this->productmodel->save($productdata);

					if($status) {
						$_SESSION['status']['success'] = 'Successfully inserted!!!';
						redirect('product/add');
					} else {
						$_SESSION['status']['error'] = 'Error inserting!!!';
						//redirect('product/add');
					}
				} else {
					$_SESSION['status']['error'] = 'Invalid image format';
				}
				
			}


			
			// debug($error);
			// die;
		}

		
		
		$categories = $this->categorymodel->findAll();

		$data = array(
			'categories'	=>	$categories,
			'error'			=>	$error
		);
		Loader::view('admin/product/add', $data);
	}

	public function delete($segments)
	{
		adminauthenticate();
		debug($segments);
		$pid = $segments[0][0];

		$status = $this->productmodel->delete($pid);

		if($status) {
			$_SESSION['status']['success'] = 'Successfully deleted';
		} else {
			$_SESSION['status']['error'] = 'Error Deleting';
				
		}

		redirect('product/index');
	}

	public function edit($segments)
	{

		adminauthenticate();

		$data = array();

		$pid = $segments[0][0];

		$productinfo = $this->productmodel->findById($pid);


		if($_POST) {
			$productdata = array();
			$productdata['cid'] = $_POST['cid'];
			$productdata['pname'] = $_POST['pname'];
			$productdata['pdesc'] = $_POST['pdesc'];
			$productdata['pprice'] = $_POST['pprice'];
			$productdata['pimage'] = $productinfo['pimage'];
			// debug($productinfo);

			// debug($_FILES, 1);
			if($_FILES['pimage']['error'] === 0) {
				
				$newimage = time() . '_' . $_FILES['pimage']['name'];

				$newimagepath = ROOT_PATH . '/uploads/images/' . $newimage;

				$status = move_uploaded_file($_FILES['pimage']['tmp_name'], $newimagepath);

				// if file uploaded
				if($status) {
					$productdata['pimage'] = $newimage;

					$oldfilepath = ROOT_PATH . '/uploads/images/' . $productinfo['pimage'];

					if(is_file($oldfilepath)) {
						unlink($oldfilepath);
					}
				}
			}
			

			$status = $this->productmodel->update($productdata, $pid);

			if($status) {
				$_SESSION['status']['success'] = 'Successfully updated';
			} else {
				$_SESSION['status']['error'] = 'Error updating';		
			}

			redirect('product/edit/' . $pid);

		}

		$data['productinfo'] = $productinfo;

		$categories = $this->categorymodel->findAll();

		$data['categories'] = $categories;

		Loader::view('admin/product/edit', $data);
	}

	public function status($segments)
	{
        
        	$pid = $segments[0][0];
        	$productinfo = $this->productmodel->findById($pid);
        	if ($productinfo['pstatus'] == 1)
        	{
        		$status = $this->productmodel->updatestatusdown($pid);
        	}
        	else
        	{
        		$status = $this->productmodel->updatestatusup($pid);

        	}
        	if($status) {
				$_SESSION['status']['success'] = 'Status Updated Successfully';
			} else {
				$_SESSION['status']['error'] = 'Error updating the Status';		
			}

			redirect('product/index');

        
	}
	


	
}
	

	
		
	



	// public function detail(Request $request)
	//{
//		debug($request);
//		$pid = $request[0][0];
//		echo $request[0]['getparams']['pg'];
//		echo $_GET['pg'];
//		echo '<br> detail action of product controller';
//	}
//}