<?php
require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $icon = trim(htmlentities($_POST['icon']));
    $icon_color = trim(htmlentities($_POST['icon_color']));

    // title validation
    if (empty($title)) {
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    } elseif (strlen($title) >= 50) {
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    } 
    //description validation
    if (strlen($description) >= 200) {
        $error['descrip_err'] = "<p class='alert alert-warning'>Max description! you must be 200 less character</p>";
    }
    //icon text validation
    if (strlen($icon) >= 50) {
        $error['icon_err'] = "<p  class='alert alert-warning'>Max character button 50.!</p>";
    }
    //icon color validation
    if (strlen($icon_color) >= 50) {
        $error['icon_color_err'] = "<p  class='alert alert-warning'>Max character button 50.!</p>";
    }
    //insert query
    if (empty($error)) {

        $query = "UPDATE services SET title='$title',description='$description',icon='$icon',icon_color='$icon_color' WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if ($result == true) {
            $_SESSION['service_mess'] = "<p  class='alert alert-success'>Service edit successful!</p>";
            header("Location:all_services_view.php");
        }
    }
}
