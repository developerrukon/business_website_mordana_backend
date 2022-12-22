<?php
   require_once "signup.php";

?>

<!DOCTYPE html>
<html lang="en"
   dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible"
         content="IE=edge">
      <meta name="viewport"
         content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login</title>
      <!-- Prevent the demo from appearing in search engines -->
      <meta name="robots"
         content="noindex">
      <!-- Perfect Scrollbar -->
      <link type="text/css"
         href="../css/perfect-scrollbar.css"
         rel="stylesheet">
      <!-- App CSS -->
      <link type="text/css"
         href="../css/app.css"
         rel="stylesheet">
      <!-- Material Design Icons -->
      <link type="text/css"
         href="../css/vendor-material-icons.css"
         rel="stylesheet">
      <!-- Font Awesome FREE Icons -->
      <link type="text/css"
         href="../css/vendor-fontawesome-free.css"
         rel="stylesheet">
   </head>
   <body class="layout-login-centered-boxed">
      <div class="layout-login-centered-boxed__form card">
         <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <div class="navbar-brand flex-column mb-2 align-items-center mr-0"
               style="min-width: 0">

            <span>MODERNA</span>
            </div>
            <p class="m-0">Create an account with Moderana</p>
         </div>
<!-- form start -->
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <label class="text-label" for="name_2">Name:</label>
               <div class="input-group input-group-merge">
                  <input  type="text" name="name" class="form-control form-control-prepended" placeholder="enter you name" value="<?php if(isset($name)) echo $name; ?>"/>
               </div>
               <?php
                  if(isset($error['nameErr'])){
                     echo $error['nameErr'];
                  }
                  ?>
            </div>
            <div class="form-group">
               <label class="text-label" for="email_2">Email Address:</label>
               <div class="input-group input-group-merge">
                  <input  type="email" name="email" class="form-control form-control-prepended" placeholder="enter you email" value="<?php if(isset($email)) echo $email; ?>"/>
            </div>
            <?php
                  if(isset($error['emailErr'])){
                     echo $error['emailErr'];
                  }
                  ?>
            <div class="form-group">
               <label class="text-label" for="password_2">Password:</label>
               <div class="input-group input-group-merge">
                  <input  type="password" name="password" class="form-control form-control-prepended" placeholder="Enter your password" value="<?php if(isset($password)) echo $password; ?>"/>
               </div>
               <?php
                  if(isset($error['passwordErr'])){
                     echo $error['passwordErr'];
                  }
                  ?>
            </div>
            <div class="form-group">
               <label class="text-label" for="password_2">Photo:</label>
               <div class="input-group input-group-merge">
                  <input  type="file" name="photo" class="form-control form-control-prepended"/>
               </div>
               <?php
                  if(isset($error['photoErr'])){
                     echo $error['photoErr'];
                  }
                  ?>
            </div>
            <div class="form-group text-center">
               <button class="btn btn-primary mb-2"
                  type="submit" name="submit">Create Account</button><br>
               <a class="text-body text-underline"
                  href="login_email_view.php">Have an account? Login</a>
            </div>
         </form>
<!-- form end -->
      </div>
   </body>
</html>