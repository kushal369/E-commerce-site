<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Product Edit</h2>


          <?php Loader::view('admin/layouts/message');?>


          <div class="table-responsive">
            <form name="frmuseredit" method="post" action="" enctype="multipart/form-data">

            <div class="form-group">
            <label for="category">Category</label>
            <select name="cid" class="form-control">
            <?php 
            foreach($data['categories'] as $c)
            {
            ?>
              <option value="<?php echo $c['cid']?>" <?php if($c['cid'] === $data['productinfo']['cid']) { echo 'selected'; }?>><?php echo $c['cname']?></option>
            <?php } ?>
            </select>
            </div>


            <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" name="pname" value="<?php echo $data['productinfo']['pname'];?>" class="form-control">
            </div>

            <!-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  class="form-control">
            </div> -->

            <div class="form-group">
            <label for="pdesc">Description</label>
            <input type="text" name="pdesc" value="<?php echo $data['productinfo']['pdesc'];?>"  class="form-control" >
            </div>

            <div class="form-group">
            <label for="pprice">Product Price</label>
            <input type="text" name="pprice" value="<?php echo $data['productinfo']['pprice'];?>"  class="form-control" >
            </div>

            <div class="form-group">
            <label for="pprice">Product Image</label>
            <input type="file" name="pimage" class="form-control">

            <img src="<?php echo ROOT_URL;?>/uploads/images/<?php echo $data['productinfo']['pimage']; ?>" height="80px">
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