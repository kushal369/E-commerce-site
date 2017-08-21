<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Product Add</h2>


          <?php Loader::view('admin/layouts/message');?>

<?php //debug($_POST); ?>

          <div class="table-responsive">
            <form name="frmadd" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
            <label for="category">Category</label>
            <select name="cid" class="form-control">
            <?php 
            foreach($data['categories'] as $c)
            {
            ?>
              <option value="<?php echo $c['cid']?>"><?php echo $c['cname']?></option>
            <?php } ?>
            </select>
            </div>

            <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" name="pname" value="<?php echo isset($_POST['pname']) ? $_POST['pname'] : '';?>" class="form-control">
            </div>

            <div class="form-group">
            <label for="pdesc">Description</label>
            <textarea name="pdesc" class="form-control"><?php echo isset($_POST['pdesc']) ? $_POST['pdesc'] : '';?></textarea>
            </div>

            <div class="form-group">
            <label for="pprice">Product Price</label>
            <input type="text" name="pprice" class="form-control">
            </div>

            <div class="form-group">
            <label for="pimage">Product Image</label>
            <input type="file" name="pimage" class="form-control">
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