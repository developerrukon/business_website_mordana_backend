<?php
require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $image = $_FILES['image'];
    $image_name = $about['image'];

    $photoType = ["jpg", "png", "jpeg", "svg","gif"];
    $photoEx = explode(".", $image["name"]);

    // image validation
    if($image['name']){
        if(!in_array(end($photoEx), $photoType)) {
            $error["image_err"] = "<div class='alert alert-warning'>Please! Upload you jpg, png, jpeg, svg or git photo!</div>";
        } elseif ($image["size"] > 2000000) {
            $error["image_err"] = "<div class='text-danger'>Please! Upload photo max 2 MB</div>";
        }elseif(!in_array(end($photoEx),$photoType)){
            $error['image_err'] = "<p  class='alert alert-warning'>Please! Upload you jpg, png or jpeg photo!</p>";
    
        }else{
            $path = "../../uploads/about/".$image_name;
            if (file_exists($path)){
                unlink($path);
            }
            $image_name = uniqid().'.'.end($photoEx);
            $upload = move_uploaded_file($image['tmp_name'], "../../uploads/about/" . $image_name);
    
        }
    }
    // title validation
    if (empty($title)) {
        $error['title_err'] = "<p class='alert alert-warning'>enter you website name.!</p>";
    } elseif (strlen($title) > 100) {
        $error['title_err'] = "<p  class='alert alert-warning'>Max character name 100.!</p>";
    }
    if(strlen($description) > 2000) {
      $error['descrip_err'] = "<p  class='alert alert-warning'>footer description max 2000!</p>";
    }

    if (empty($error)) {
            $query = "UPDATE about SET title='$title',description='$description',image='$image_name' WHERE id = 1;";
            $result = mysqli_query($connect,$query);
            if ($result) {
                //header("location:settings_details_view.php");
            }
      
    }
}
