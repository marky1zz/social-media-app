<?php 


  
  
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <form method="post" autocomplete="on" action="">
            <?php
              include("configs/dbconnect.php");            
            ?>
              <!---Email ID---->
              <div class="box">
            <label for="email" class="fl fontLabel"> Email ID: </label>
                  <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="email" required name="email" placeholder="Email Id" class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!--Email ID----->
  
  
              <!---Password------>
              <div class="box">
            <label for="password" class="fl fontLabel"> Password </label>
                  <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="Password" required name="password" placeholder="Password" class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!---Password---->


              <!---Submit Button------>
              <div class="box" style="background: #2d3e3f">
                      <input type="Submit" name="loginBtn" class="submit" value="LOG IN">
              </div>
              <!---Submit Button----->

              <!--Log in link----->
              <div class="box login-link-box">
                <p class="bottom-text">Don't have an account? <a href="registration.php" class="login">Register</a></p>
              </div>
              
              <!--Log in link----->
        </form>
    </div>
</body>
</html>