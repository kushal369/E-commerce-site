  <?php Loader::view('frontend/layouts/header'); 
// creating image thumbnail.
// study yourself
  ?>



    <div class="center_content">
      <div class="center_title_bar">Latest Products</div>

      <?php foreach($data['products'] as $p) { ?>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title">
          <a href="<?php echo create_url('default/detail/' . $p['pid']);?>"><?php echo $p['pname']?></a>
          </div>
          <div class="product_img"><a href="<?php echo create_url('default/detail/' . $p['pid']);?>"><img src="<?php echo ROOT_URL;?>/uploads/images/<?php echo $p['pimage'];?>" height="100px" alt="" border="0" /></a></div>
          <div class="prod_price">
          <!-- <span class="reduce">350$</span>  -->
          <span class="price">Nrs <?php echo $p['pprice'];?></span>
          </div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="<?php echo create_url('cart/add/' . $p['pid']);?>" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="<?php echo create_url('default/detail/' . $p['pid']);?>" class="prod_details">details</a> </div>
      </div>
      <?php 
      }
      ?>
      
      <div class="center_title_bar">Recommended Products</div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
          <div class="product_img"><a href="details.html"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/laptop.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Iphone Apple</a></div>
          <div class="product_img"><a href="details.html"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/p4.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Samsung Webcam</a></div>
          <div class="product_img"><a href="details.html"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/p5.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo ROOT_URL;?>/assets/frontend/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
    </div>
    <!-- end of center content -->
    



    <?php Loader::view('frontend/layouts/footer'); ?>