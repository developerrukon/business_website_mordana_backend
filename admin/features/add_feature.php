<?php
require_once "../../db_con.php";
$error = [];
if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $image = $_FILES['image'];

// image validation
  $photoType = ["jpg", "png", "jpeg", "gif","svg"];
  $photoEx = explode(".", $image["name"]);
  if(empty($image["name"])){
    $error["image_err"] = "<div class='alert alert-warning'>Upload you photo!</div>";
  }elseif(! in_array(end($photoEx),$photoType)){
    $error["image_err"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
  }

//title validation
    if(empty($title)){
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    }elseif(strlen($title) >= 100){
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title 100.!</p>";
    }
//description validation
    if(strlen($description) >= 800){
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 800 less character</p>";
    }

//insert query
    if(empty($error)){
        $photo_name = uniqid().".".end($photoEx);
        $upload = move_uploaded_file($image["tmp_name"], "../../uploads/features/". $photo_name);
        if($upload){
            $query = "INSERT INTO features (title,description,image) VALUES ('$title','$description','$photo_name')";
            $result = mysqli_query($connect,$query);   
            if($result){
                $_SESSION['message'] = "<P class='alert alert-success'>add feature Successful.!</p>";
                header("location:all_features_view.php");
            }
        }
    }


}
