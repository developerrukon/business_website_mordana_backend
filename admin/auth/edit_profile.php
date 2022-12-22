<?php
require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $photo = $_FILES['photo'];
    $id = $_SESSION['info']['id'];
    $photo_name = $user['photo'];

    $photoType = ["jpg", "png", "jpeg"];
    $photoEx = explode(".", $photo["name"]);

    // image validation
    if($photo['name']){
        if (empty($photo["name"])) {
            $error["photoErr"] = "<div class='alert alert-warning'>Upload you photo!</div>";
        } elseif (!in_array(end($photoEx), $photoType)) {
            $error["photoErr"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
        } elseif ($photo["size"] > 2000000) {
            $error["photoErr"] = "<div class='text-danger'>Please! Upload photo max 2 MB</div>";
        }else{
            $path = "../images/".$photo_name;
            if (file_exists($path)){
                unlink($path);
            }
            $photo_name = uniqid().'.'.end($photoEx);
            $upload = move_uploaded_file($photo['tmp_name'], "../images/" . $photo_name);
    
        }
    }
    // name validation
    if (empty($name)) {
        $error['nameErr'] = "<p class='alert alert-warning'>enter you name.!</p>";
    } elseif (strlen($name) > 30) {
        $error['nameErr'] = "<p  class='alert alert-warning'>Max character name.!</p>";
    }
    // email validation
    if (empty($email)) {
        $error['emailErr'] = "<p  class='alert alert-warning'>enter you email.!</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['emailErr'] = "<p  class='alert alert-warning'>enter valid email.!</p>";
    }

    if (empty($error)) {
            $query = "UPDATE users SET name='$name',email='$email',photo='$photo_name' WHERE id = '$id' ";
            $result = mysqli_query($connect, $query);
            // if ($result) {
            //     header("location:profile_view.php");
            // }
      
    }
}
