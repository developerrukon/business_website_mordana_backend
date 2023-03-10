<?php
   require_once "login_email.php";
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
      <?php
         if(isset($_SESSION['message'])){
              echo $_SESSION['message'];
            }
         if(isset($_SESSION['userErr'])){
            echo $_SESSION['userErr'];
         }
        unset($_SESSION['message']);
        unset($_SESSION['userErr']);
        ?>
         <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <div class="navbar-brand flex-column mb-2 align-items-center mr-0"
               style="min-width: 0">
               <span class="text-primary mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor"
                     style="width:20px;"
                     viewBox="0 0 40 40">
                     <path d="M40 34.16666667c.01-3.21166667-2.58333333-5.82333334-5.795-5.835-1.94-.00666667-3.75666667.955-4.84166667 2.565-.10166666.155-.295.22333333-.47166666.16666666L11.94 25.66666667c-.19-.06-.31-.245-.28833333-.44333334.01-.07333333.015-.14833333.015-.22333333 0-.06833333-.005-.13833333-.01333334-.20666667-.02166666-.20166666.105-.39.3-.44666666l17.96-5.13c.13833334-.04.28666667-.005.39333334.09166666 1.05.97333334 2.42833333 1.51666667 3.86 1.525C37.38833333 20.83333333 40 18.22166667 40 15s-2.61166667-5.83333333-5.83333333-5.83333333C32.52 9.17166667 30.95333333 9.87833333 29.86 11.11c-.11.12166667-.28.16833333-.43666667.11833333L11.91 5.65333333c-.16-.05-.27333333-.19166666-.28833333-.35833333-.30333334-3.20166667-3.14333334-5.55166667-6.345-5.24833333S-.275 3.19.02833333 6.39166667c.28166667 2.99333333 2.79833334 5.28 5.805 5.275 1.64666667-.005 3.21333334-.71333334 4.30666667-1.945.11-.12166667.28-.16833334.43666667-.11833334l16.57 5.27166667c.22.06833333.34166666.30333333.27166666.52333333-.04166666.13333334-.14833333.23833334-.28333333.275L9.90333333 20.59666667c-.13333333.03833333-.275.00833333-.38166666-.08-1.03333334-.86833334-2.33833334-1.34666667-3.68833334-1.35C2.61166667 19.16666667 0 21.77833333 0 25s2.61166667 5.83333333 5.83333333 5.83333333c1.355-.005 2.665-.485 3.7-1.35833333.10833334-.09166667.25833334-.12.39333334-.07666667l18.29 5.81833334c.14.04333333.24666666.15666666.28.3.75666666 3.13166666 3.90833333 5.05666666 7.04 4.3C38.14833333 39.185 39.99 36.85333333 40 34.16666667z" />
                  </svg>
               </span>
               <span>MODERNA</span>
</div>
            <p class="m-0">Login to access your Moderana Account </p>
         </div>
         <form method="POST">
            <div class="form-group">
               <label class="text-label"
                  for="email_2">Email Address:</label>
               <div class="input-group input-group-merge">
                  <input id="email_2"  type="email" name="email" class="form-control form-control-prepended" placeholder="enter you email" value="<?php if(isset($email)) echo $email; ?>" />
               </div>
               <?php
                  if(isset($error['emailErr'])){
                     echo $error['emailErr'];
                  }
               ?>
            </div>
            <div class="form-group text-center">
               <button class="btn  btn-primary"
                  type="submit" name="submit">Next</button>
            </div>
            <div class="form-group text-center">
            </div>
            <div class="form-group text-center">
               Don't have an account? <a class="text-body text-underline"
                  href="signup_view.php">Sign up!</a>
            </div>
         </form>
      </div>
   </body>
</html>