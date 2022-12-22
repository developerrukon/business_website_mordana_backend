<?php
require_once "../../db_con.php";
session_start();
$error = [];
if(isset($_POST['submit'])){
    $email = trim(htmlentities($_POST['email']));

    if(empty($email)){
        $error ['emailErr'] = "<p class='alert alert-danger'>enter you email.!</p>";
    }
    if(empty($error)){
        $query = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
             if($user['email'] == $email){
                $_SESSION['info'] = $user;
                $_SESSION['user'] = "<p class='alert alert-success'>Email Success.Please!enter you password..</p>";
                header("location:login_pass_view.php");
            
                }else{
                    $error ['emailErr'] = "<p class='alert alert-danger'>email not found!</p>";
                    header("location:login_email_view.php");
                }

            }

    }
}
