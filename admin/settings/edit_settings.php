<?php
require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $website_name = trim(htmlentities($_POST['website_name']));
    $footer_text = trim(htmlentities($_POST['footer_text']));
    $logo = $_FILES['logo'];
    $logo_name = $settings['logo'];

    $photoType = ["jpg", "png", "jpeg"];
    $photoEx = explode(".", $logo["name"]);

    // image validation
    if($logo['name']){
        if (empty($logo["name"])) {
            $error["logo_err"] = "<div class='alert alert-warning'>Upload you photo!</div>";
        } elseif (!in_array(end($photoEx), $photoType)) {
            $error["logo_err"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
        } elseif ($logo["size"] > 2000000) {
            $error["logo_err"] = "<div class='text-danger'>Please! Upload photo max 2 MB</div>";
        }elseif(!in_array(end($photoEx),$photoType)){
            $error['image_err'] = "<p  class='alert alert-warning'>Please! Upload you jpg, png or jpeg photo!</p>";
    
        }else{
            $path = "../../uploads/settings/".$logo_name;
            if (file_exists($path)){
                unlink($path);
            }
            $logo_name = uniqid().'.'.end($photoEx);
            $upload = move_uploaded_file($logo['tmp_name'], "../../uploads/settings/" . $logo_name);
    
        }
    }
    // name validation
    if (empty($website_name)) {
        $error['name_err'] = "<p class='alert alert-warning'>enter you website name.!</p>";
    } elseif (strlen($website_name) > 100) {
        $error['name_err'] = "<p  class='alert alert-warning'>Max character name 100.!</p>";
    }
    if (empty($footer_text)) {
      $error['footer_err'] = "<p class='alert alert-warning'>enter you name.!</p>";
  } elseif (strlen($footer_text) > 1000) {
      $error['footer_err'] = "<p  class='alert alert-warning'>footer description max 1000!</p>";
  }

    if (empty($error)) {
            $query = "UPDATE settings SET website_name='$website_name',logo='$logo_name',footer_text='$footer_text' WHERE id=1 ";
            $result = mysqli_query($connect,$query);
            if ($result) {
                //header("location:settings_details_view.php");
            }
      
    }
}

