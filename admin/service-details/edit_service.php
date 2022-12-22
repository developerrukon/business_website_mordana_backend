<?php
require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_url = trim(htmlentities($_POST['btn_url']));
    $image = $_FILES['image'];
    $image_name = $service['image'];
    $id = $service['id'];

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
            $path = "../../uploads/service_details/".$image_name;
            if (file_exists($path)){
                unlink($path);
            }
            $image_name = uniqid().'.'.end($photoEx);
            $upload = move_uploaded_file($image['tmp_name'], "../../uploads/service_details/" . $image_name);
    
        }
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
//description validation
    if(strlen($btn_text) >= 50){
        $error['btn_text_err'] = "<p class='alert alert-warning'>Max character button text 50!</p>";
    }
//description validation
    if(strlen($btn_url) >= 250){
        $error['btn_url_err'] = "<p class='alert alert-warning'>>max character button url 250.!</p>";
    }


    if (empty($error)) {
            $query = "UPDATE service_details SET title='$title',description='$description',btn_text='$btn_text',btn_url='$btn_url',image='$image_name' WHERE id='$id'";
            $result = mysqli_query($connect,$query);
            if ($result) {
                header("location:all_services_view.php");
            }
      
    }
}

