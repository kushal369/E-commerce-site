<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">User Add</h2>


          <?php Loader::view('admin/layouts/message');?>


          <div class="table-responsive">
            <form name="frmuseradd" method="post" action="">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  class="form-control">
            </div>

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address"  class="form-control"></textarea>
            </div>
           

            <div class="form-group">
            <input type="submit" value="Add" class="btn btn-success">
            </div>

            </form>
                
              
          </div>
        </div>
      </div>
    </div>


<?php Loader::view('admin/layouts/footer');?>