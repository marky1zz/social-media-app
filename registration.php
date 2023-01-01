<?php 
  session_start();

  
  //$user_data = check_login($conn);
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
    
    
    <div class="container">
      <form method="post" autocomplete="on" action="configs/dbconnect.php">
        <?php
          include("configs/dbconnect.php");
        ?>
          <!--First name-->
              <div class="box">
                    <label for="firstName" class="fl fontLabel"> First Name: </label>
                        <div class="new iconBox">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                  <div class="fr">
                        <input type="text" name="firstName" placeholder="First Name" class="textBox" autofocus="on" required>
                  </div>
                  <div class="clr"></div>
              </div>
              <!--First name-->
  
  
          <!--Second name-->
              <div class="box">
            <label for="lastNmae" class="fl fontLabel"> Seconed Name: </label>
                  <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="text" required name="lastName"
                placeholder="Last Name" class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!--Second name-->
  
  
              <!---Phone No.------>
              <div class="box">
            <label for="phone" class="fl fontLabel"> Phone No.: </label>
                  <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                  <div class="fr">
                          <input type="text" required name="number" maxlength="10" placeholder="Phone No." class="textBox">
                  </div>
                  <div class="clr"></div>
              </div>
              <!---Phone No.---->
  
  
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
  
              <!---Gender----->
              <div class="box radio">
            <label for="gender" class="fl fontLabel"> Gender: </label>
                      <input type="radio" name="gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
                      <input type="radio" name="gender" value="Female" required> Female
              </div>
              <!---Gender--->
  
  
              
  
  
  
              <!---Submit Button------>
              <div class="box" style="background: #2d3e3f">
                      <input type="Submit" name="Submit" class="submit" value="REGISTER">
              </div>
              <!---Submit Button----->

              <!--Log in link----->
              <div class="box login-link-box">
                <p class="bottom-text">Already have an account? <a href="login.php" class="login">Login</a></p>
              </div>
              
              <!--Log in link----->
        </form>
    </div>

    
</body>
</html>