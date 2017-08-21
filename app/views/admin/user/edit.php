<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">User Edit</h2>


         <?php Loader::view('admin/layouts/message');?> 


          <div class="table-responsive">
            <form name="frmuseredit" method="post" action="">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="<?php echo $data['userinfo']['username'];?>" class="form-control">
            </div>

            <!-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  class="form-control">
            </div> -->

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $data['userinfo']['name'];?>"  class="form-control" >
            </div>

            <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address"  class="form-control"><?php echo $data['userinfo']['address'];?></textarea>
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