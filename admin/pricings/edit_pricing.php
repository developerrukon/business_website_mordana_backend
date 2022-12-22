<?php

require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $pricing_number = trim(htmlentities($_POST['pricing_number']));
    $pricing_heading = trim(htmlentities($_POST['pricing_heading']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_url = trim(htmlentities($_POST['btn_url']));
    $description = trim(htmlentities($_POST['description']));
    $id = $pricing['id'];

    // title validation
    if (empty($title)) {
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    } elseif (strlen($title) >= 50) {
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    }
    //description validation
    if (strlen($description) >= 800) {
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 800 less character</p>";
    }
    //icon text validation
    if (strlen($pricing_number) >= 6) {
        $error['pricing_number_err'] = "<p  class='alert alert-warning'>Max character 6.!</p>";
    }
    //icon color validation
    if (strlen($pricing_heading) >= 50) {
        $error['pricing_heading_err'] = "<p  class='alert alert-warning'>Max character 50.!</p>";
    }
//icon text validation
    if (strlen($btn_url) >= 100) {
            $error['btn_url_err'] = "<p  class='alert alert-warning'>Max url 100!</p>";
    }
//icon color validation
        if (strlen($btn_text) >= 50) {
            $error['btn_text_err'] = "<p  class='alert alert-warning'>Max character 50.!</p>";
        }
    //insert query
    if(empty($error)) {

        $query = "UPDATE pricings SET title='$title',pricing_number='$pricing_number',pricing_heading='$pricing_heading',description='$description',btn_text='$btn_text',btn_url='$btn_url' WHERE id='$id'";
        $result = mysqli_query($connect, $query);

        if ($result){
           // $_SESSION['service_mess'] = "<p  class='alert alert-success'>New user add successful!</p>";
            header("location:all_pricings_view.php");
        }
    }
}
