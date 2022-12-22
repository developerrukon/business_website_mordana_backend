<?php
require_once "select_single_testimonial.php";
$error = [];
if(isset($_POST['submit'])){
    $name = trim(htmlentities($_POST['name']));
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $image = $_FILES['image'];
    $image_name = $testimonial['image'];
    $id = $testimonial['id'];

    print_r($image);
    $photoType = ["jpg", "png", "jpeg"];
    $photoEx = explode(".", $image["name"]);

    // image validation
    if($image['name']){
        if(!in_array(end($photoEx), $photoType)) {
            $error["image_err"] = "<div class='alert alert-warning'>Please! Upload you jpg, png or jpeg photo!</div>";
        } elseif ($image["size"] > 2000000) {
            $error["image_err"] = "<div class='text-danger'>Please! Upload photo max 2 MB</div>";
        }elseif(!in_array(end($photoEx),$photoType)){
            $error['image_err'] = "<p  class='alert alert-warning'>Please! Upload you jpg, png or jpeg photo!</p>";
    
        }else{
            $path = "../../uploads/testimonials/".$image_name;
            if (file_exists($path)){
                unlink($path);
            }
            $image_name = uniqid().'.'.end($photoEx);
            $upload = move_uploaded_file($image['tmp_name'], "../../uploads/testimonials/".$image_name);
    
        }
    }
//title validation
    if(empty($title)){
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    }elseif(strlen($title) >= 50){
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title.!</p>";
    }
//name validation
    if(empty($name)){
        $error['name_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    }elseif(strlen($name) >= 50){
        $error['name_err'] = "<p  class='alert alert-warning'>Max character title.!</p>";
    }
// description validation
    if(strlen($description) >= 500){
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 200 less character</p>";
    }

    if(empty($error)){

        $query = "UPDATE testimonials SET title='$title',name='$name',description='$description',image='$image_name' WHERE id='$id';";
       
        $result = mysqli_query($connect,$query);
        if($result){
            //$_SESSION['message'] = "<p  class='alert alert-success'>Data Update successful!</p>";
            header("location:all_testimonials_view.php");
        }
    }

}
