  <?php Loader::view('frontend/layouts/header'); 

  ?>




<div class="center_content">
      <div class="center_title_bar">Sign Up</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">

          <form name="frmsignup" method="post">

            <div class="form_row">
              <label class="contact"><strong>First Name:</strong></label>
              <input type="text" name="fname" class="contact_input">
            </div>

            <div class="form_row">
              <label class="contact"><strong>Last Name:</strong></label>
              <input type="text" name="lname" class="contact_input">
            </div>

            <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
              <input type="text" class="contact_input">
            </div>

            <div class="form_row">
              <label class="contact"><strong>Password:</strong></label>
              <input type="text" name="password" class="contact_input">
            </div>

            <div class="form_row">
              <label class="contact"><strong>Confirm Password:</strong></label>
              <input type="text" name="cpassword" class="contact_input">
            </div>

            <div class="form_row">
              <label class="contact"><strong>Phone:</strong></label>
              <input type="text" name="phone" class="contact_input">
            </div>

            
            
            <div class="form_row"> 
            <!-- <a href="#" class="contact">send</a>  -->
            <input type="submit" value="Sign Up">
            </div>

            </form>

          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>











   <?php Loader::view('frontend/layouts/footer'); ?>