<div class="left_content">
      <div class="title_box">Categories</div>


      <?php 
      $categories = get_categories();
      // debug($categories);

      ?>

      <ul class="left_menu">
      <?php foreach($categories as $key=>$c) { ?>
        <li 
        <?php 
          if($key % 2 == 0) {
            echo 'class="even"'; 
          } else {
            echo 'class="odd"';
          }?>><a href="<?php echo create_url('default/index/' . $c['cid']);?>"><?php echo $c['cname'];?></a></li>
        <?php } ?>
        <!-- <li class="even"><a href="#">Motherboards</a></li>
        <li class="odd"><a href="#">Desktops</a></li>
        <li class="even"><a href="#">Laptops &amp; Notebooks</a></li>
        <li class="odd"><a href="#">Processors</a></li>
        <li class="even"><a href="#">Motherboards</a></li>
        <li class="odd"><a href="#">Processors</a></li>
        <li class="even"><a href="#">Motherboards</a></li>
        <li class="odd"><a href="#">Desktops</a></li>
        <li class="even"><a href="#">Laptops &amp; Notebooks</a></li>
        <li class="odd"><a href="#">Processors</a></li>
        <li class="even"><a href="#">Motherboards</a></li> -->
      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">join</a> </div>
      <div class="banner_adds"> <a href="#"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>