<?php
require_once "../../db_con.php";
session_start();
$error = [];
if(isset($_POST['submit'])){
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $photo = $_FILES['photo'];
    $encTypePwd = md5($password);
    
// image validation
      $photoType = ["jpg", "png", "jpeg", "gif","svg"];
      $photoEx = explode(".", $photo["name"]);
      if(empty($photo["name"])){
        $error["photoErr"] = "<div class='alert alert-warning'>Upload you photo!</div>";
      }elseif(! in_array(end($photoEx),$photoType)){
        $error["photoErr"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
      }elseif($photo["size"] > 2000000){
        $error["photoErr"] = "<div class='text-danger'>Please! Upload photo max 2 MB</div>";
        }
// name validation
    if(empty($name)){
        $error['nameErr'] = "<p class='alert alert-warning'>enter you name.!</p>";
    }elseif(strlen($name) > 30){
        $error['nameErr'] = "<p  class='alert alert-warning'>Max character name.!</p>";
    }
// email validation
    if(empty($email)){
        $error['emailErr'] = "<p  class='alert alert-warning'>enter you email.!</p>";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['emailErr'] = "<p  class='alert alert-warning'>enter valid email.!</p>";
    }
// password validation
    if(empty($password)){
        $error['passwordErr'] = "<p  class='alert alert-warning'>enter you password.!</p>";
    }elseif(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
        $error['passwordErr'] = "<p  class='alert alert-warning'>Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.!</p>";
    }

    if(empty($error)){
        $emailCheck = "SELECT email FROM users WHERE  email = '$email'";
        $resultEemail = mysqli_query($connect,$emailCheck);
        if(mysqli_num_rows($resultEemail) == 0){

            $photo_name = str_replace(' ', '', $name)."_".uniqid().".".end($photoEx);
            $upload = move_uploaded_file($photo["tmp_name"], "../images/". $photo_name);
            if($upload){
                $query = "INSERT INTO users(name, email, password, photo ) VALUES ('$name','$email','$encTypePwd','$photo_name')";
                $result = mysqli_query($connect,$query);
                if($result){
                    $_SESSION['message'] = "<h5 class='alert alert-success'>Data Inserted.please! login...</h5>";
                     header("location:login_email_view.php");
                }else{
                    $_SESSION['messageErr'] = "<h5 class='alert alert-warning'>Data Not Inserted.!</h5>";
                     header("location:signup_view.php");
                }
            }


        }else{
            $error['emailErr'] = "<p  class='alert alert-warning'>already email account cheated.please! different email address.</p>";
            }

    }
}