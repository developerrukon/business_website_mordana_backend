<?php
require_once "../../db_con.php";
$error = [];
if(isset($_POST['submit'])){
    $name = trim(htmlentities($_POST['name']));
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $image = $_FILES['image'];

//image validation
// image validation
$photoType = ["jpg", "png", "jpeg", "gif","svg"];
$photoEx = explode(".", $image["name"]);
if(empty($image["name"])){
  $error["image_err"] = "<div class='alert alert-warning'>Upload you photo!</div>";
}elseif(! in_array(end($photoEx),$photoType)){
  $error["image_err"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
}


//title validation
    if(empty($name)){
        $error['name_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    }elseif(strlen($name) >= 50){
        $error['name_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    }
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

//insert query
    if(empty($error)){
        $photo_name = uniqid().".".end($photoEx);
        $upload = move_uploaded_file($image["tmp_name"], "../../uploads/testimonials/". $photo_name);
        $query = "INSERT INTO testimonials(title, name, description, image) VALUES ('$title','$name','$description','$photo_name');";
        $result = mysqli_query($connect,$query);    
        if($result){
           // $_SESSION['banner_message'] = "<P class='alert alert-success'>add User Successful.!</p>";
            header("location:all_testimonials_view.php");
        }

    }

}
