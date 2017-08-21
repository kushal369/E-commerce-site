<?php Loader::view('admin/layouts/header');?>

    <div class="container-fluid">
      <div class="row">


        <?php Loader::view('admin/layouts/sidebar'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Category List</h2>



          <div class="table-responsive">

<?php Loader::view('admin/layouts/message');?>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>C_id</th>
                  <th>C_Name</th>
                  <th>C_Detail</th>
                  
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
                  <td><?php echo $r['cname'];?></td>
                  <td><?php echo $r['cdetail'];?></td>
                 
                  <td>
                    <a href="<?php echo create_url('category/edit/' . $r['cid']);?>" onclick=" return confirm('Are u sure you want to EDIT?');">
                    <span class="glyphicon glyphicon-edit glyphicon-th-large" aria-hidden="true"></span> 
                    </a>
                   
                   <a href="<?php echo create_url('category/delete/' . $r['cid']);?>" onclick=" return confirm('Are u sure you want to DELETE?');">
                   <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
                   </a>
                   </td>
                </tr>
                <?php 
                  }
              ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


<?php Loader::view('admin/layouts/footer');?>