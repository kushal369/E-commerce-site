<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Category Edit</h2>


         <?php Loader::view('admin/layouts/message');?> 


          <div class="table-responsive">
            <form name="frmuseredit" method="post" action="">
            <div class="form-group">
            <label for="categoryname">Category Name</label>
            <input type="text" name="categoryname" value="<?php echo $data['categoryinfo']['cname'];?>" class="form-control">
            </div>

            <!-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  class="form-control">
            </div> -->

           
            <div class="form-group">
            <label for="categorydetail">Category Detail</label>
            <textarea name="categorydetail"  class="form-control"><?php echo $data['categoryinfo']['cdetail'];?></textarea>
            </div>
           

            <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-danger">
            </div>

            </form>
                
              
          </div>
        </div>
      </div>
    </div>


<?php Loader::view('admin/layouts/footer');?>