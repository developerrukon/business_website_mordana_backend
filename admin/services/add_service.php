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

        $query = "INSERT INTO services(title, description, icon, icon_color) VALUES ('$title','$description','$icon','$icon_color')";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $_SESSION['service_mess'] = "<p  class='alert alert-success'>New user add successfull!</p>";
            header("location:all_services_view.php");
        }
    }
}
