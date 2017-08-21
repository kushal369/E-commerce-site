<?php Loader::view('admin/layouts/header');?>










<div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Change Password</h2>


          <?php Loader::view('admin/layouts/message');?>


          <div class="table-responsive">
            <form name="frmuseradd" method="post" action="">
            <div class="form-group">
            <label for="oldpass">Old Password</label>
            <input type="password" name="opassword" class="form-control">
            </div>

            <div class="form-group">
            <label for="npassword">New Password</label>
            <input type="password" name="npassword"  class="form-control">
            </div>

            <div class="form-group">
            <label for="cnpassword">Confirm New Password</label>
            <input type="password" name="cnpassword"  class="form-control">
            </div>

            

            <div class="form-group">
            <input type="submit" value="Change Password" class="btn btn-success">
            </div>

            </form>
                
              
          </div>
        </div>
      </div>
    </div>











<?php Loader::view('admin/layouts/footer');?>