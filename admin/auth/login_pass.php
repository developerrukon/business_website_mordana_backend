<?php
session_start();
require_once "../../db_con.php";
$error = [];
if(isset($_POST['submit'])){
    $password = trim(htmlentities($_POST['password']));
    $encTypePwd = md5($password);

    if(empty($password)){
        $error ['passwordErr'] = "<p class='alert alert-danger'>enter you password.!</p>";
    }
    if(empty($error)){
            if($_SESSION['info']['password'] == $encTypePwd){
                header("location:../index.php");
                }else{
                $error ['passwordErr']  = "<p class='alert alert-danger'>password is wrong!</p>";
                }

    }
}
