<?php
require_once "select_single_banner.php";
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
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title.!</p>";
    }
// description validation
    if(strlen($description) >= 500){
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 200 less character</p>";
    }
//button text validation
    if(strlen($btn_text) >= 50){
        $error['btn_text_err'] = "<p  class='alert alert-warning'>Max character button 20.!</p>";
    }
//button rul validation
    if(strlen($btn_url) >= 250){
        $error['btn_url_Err'] = "<p  class='alert alert-warning'>max character button url.!</p>";
    }

    if(empty($error)){

        $query = "UPDATE banners SET title='$title',description='$description',btn_text='$btn_text',btn_url='$btn_url ' WHERE id = '$id' ";
       
        $result = mysqli_query($connect,$query);
        if($result){
            $_SESSION['message'] = "<p  class='alert alert-success'>Data Update successful!</p>";
            header("location:all_banners_view.php");
        }else{
            $_SESSION['message'] = "<p  class='alert alert-warning'>Data not Updated!</p>";
            
            header("location:edit_banner_view.php?id='$id'");
        }
    }

}
