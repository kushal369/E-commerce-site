<?php 
          if(isset($_SESSION['status']['success'])) {
            ?>
            <div class="alert alert-success">
            <?php 
            echo $_SESSION['status']['success']; 
            unset($_SESSION['status']['success']);
            ?>
            </div>
            <?php
          }
          ?>

          <?php 
          if(isset($_SESSION['status']['error'])) {
            ?>
            <div class="alert alert-danger">
            <?php 
            echo $_SESSION['status']['error']; 
            unset($_SESSION['status']['error']);
            ?>
            </div>
            <?php
          }
          ?>