<?php
require_once "../../db_con.php";
$error = [];
if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_url = trim(htmlentities($_POST['btn_url']));
//title validation
    if(empty($title)){
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    }elseif(strlen($title) >= 50){
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    }
//description validation
    if(strlen($description) >= 500){
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 500 less character</p>";
    }
//button text validation
    if(strlen($btn_text) >= 50){
        $error['btn_text_err'] = "<p  class='alert alert-warning'>Max character button 20.!</p>";
    }
//button url validation
    if(strlen($btn_url) >= 250){
        $error['btn_url_Err'] = "<p  class='alert alert-warning'>max character button url 250.!</p>";
    }
//insert query
    if(empty($error)){

        $query = "INSERT INTO banners (title,description,btn_text,btn_url) VALUES ('$title','$description','$btn_text','$btn_url')";
        $result = mysqli_query($connect,$query);    
        if($result){
            $_SESSION['banner_message'] = "<P class='alert alert-success'>add User Successful.!</p>";
            header("location:all_banners_view.php");
        }

    }

}
