<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Category Add</h2>


          <?php Loader::view('admin/layouts/message');?>


          <div class="table-responsive">
            <form name="frmuseradd" method="post" action="">
            <div class="form-group">
            <label for="categoryname">Categoryname</label>
            <input type="text" name="categoryname" class="form-control">
            </div>

            <div class="form-group">
            <label for="categorydetail">Category Detail</label>
            <input type="text" name="categorydetail"  class="form-control">
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