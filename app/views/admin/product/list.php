<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Product List</h2>



          <div class="table-responsive">

<?php Loader::view('admin/layouts/message');?>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Product Description</th>
                  <th>Product Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $sn  = 1;
                foreach($data['records'] as $r){
                  ?>
                <tr>
                  <td><?php echo $sn++;?></td>
                  <td><?php echo $r['pname'];?></td>
                  <td><?php echo $r['pdesc'];?></td>
                  <td><?php echo $r['pprice'];?></td>
                  <td><img src="<?php echo ROOT_URL . '/uploads/images/' . $r['pimage'];?>" width="50px"></td>
                  <td>
                  <?php 
                  //echo ($r['pstatus'] === '1' ? 'Active' : 'Inactive');
                  if($r['pstatus'] == 1) {
                    ?>
                    <a href="<?php echo create_url('product/status/' . $r['pid']);?>" class="btn btn-success">Active</a>
                    <?php
                  } else {
                    ?>
                    <a href="<?php echo create_url('product/status/' . $r['pid']);?>" class="btn btn-warning">Inactive</a>
                    <?php
                  }
                  ?>
                    
                  </td>
                  <td>
                    <a href="<?php echo create_url('product/edit/' . $r['pid']);?>">
                    <span class="glyphicon glyphicon-edit glyphicon-th-large" aria-hidden="true"></span> 
                    </a>
                   
                   <a href="<?php echo create_url('product/delete/' . $r['pid']);?>"   onclick=" return confirm('Are u sure you want to DELETE ?');">
                   <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
                   </a>
                   </td>
                </tr>
                <?php 
                  }
              ?>

              <tr>
                <td colspan="6"><input type="button" value="Print" onclick="window.print();"></td>
              </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


<?php Loader::view('admin/layouts/footer');?>