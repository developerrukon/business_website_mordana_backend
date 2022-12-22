<?php

require_once "../../db_con.php";

$error = [];
if (isset($_POST['submit'])) {
    $title_one = trim(htmlentities($_POST['title_one']));
    $description_one = trim(htmlentities($_POST['description_one']));
    $icon_one = trim(htmlentities($_POST['icon_one']));
    $title_two = trim(htmlentities($_POST['title_two']));
    $description_two = trim(htmlentities($_POST['description_two']));
    $icon_two = trim(htmlentities($_POST['icon_two']));
    $video_url = trim(htmlentities($_POST['video_url']));
    $image = $_FILES['image'];
    $image_name = $why_us['image'];
    
   
    $photoType = ["jpg", "png", "jpeg"];
    $photoEx = explode(".", $image["name"]);

    // image validation
    if($image['name']){
        if (empty($image["name"])) {
            $error["image_err"] = "<div class='alert alert-warning'>Upload you photo!</div>";
        }elseif (!in_array(end($photoEx), $photoType)) {
            $error["image_err"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
        } elseif ($image["size"] > 2000000) {
            $error["image_err"] = "<div class='text-danger'>Please! Upload photo max 2 MB</div>";
        }else{
            $path = "../../uploads/why-us/".$image_name;
            if (file_exists($path)){
                unlink($path);
            }
            $image_name = uniqid().'.'.end($photoEx);
            $upload = move_uploaded_file($image['tmp_name'], "../../uploads/why-us/" . $image_name);
    
        }
    }
    // title one validation
    if (empty($title_one)) {
        $error['title_one_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    } elseif (strlen($title_one) >= 50) {
        $error['title_one_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    } 
//description one validation
    if (strlen($description_one) >= 250) {
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 250 less character</p>";
    }
//icon one text validation
    if (strlen($icon_one) >= 50) {
        $error['icon_one_err'] = "<p  class='alert alert-warning'>Max character icon text 50.!</p>";
    }
// title two validation
    if (empty($title_two)) {
        $error['title_two_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    } elseif (strlen($title_two) >= 50) {
        $error['title_two_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    } 
//description two validation
    if (strlen($description_two) >= 250) {
        $error['description_two_err'] = "<p class='alert alert-warning'>Max description! you must be 250 less character</p>";
    }
//icon two text validation
    if (strlen($icon_two) >= 50) {
        $error['icon_two_err'] = "<p  class='alert alert-warning'>Max character Icon text 50.!</p>";
    }
// video url validation
    if (strlen($video_url) >= 200) {
        $error['image_err'] = "<p  class='alert alert-warning'>max you video url 200</p>";
    }

    if (empty($error)) {
        
            $query = "UPDATE why_us SET image='$image_name',video_url='$video_url',title_one='$title_one',description_one='$description_one',icon_one='$icon_one',title_two='$title_two',description_two='$description_two',icon_two='$icon_two' WHERE id=1";
            $result = mysqli_query($connect, $query);

        // if ($result == true) {
        //     $_SESSION['message'] = "<p class='alert alert-success'>Why-us edit successfull!</p>";
        //     header("location:why_us_view.php");
        // }
    }
}

