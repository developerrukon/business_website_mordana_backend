<?php

require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $skill_number = trim(htmlentities($_POST['skill_number']));
    $skill_percent = trim(htmlentities($_POST['skill_percent']));
    $skill_color = trim(htmlentities($_POST['skill_color']));

    // title validation
    if (empty($title)) {
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    } elseif (strlen($title) >= 50) {
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    }

    //skill text validation
    if (strlen($skill_number) >= 50) {
        $error['skill_number_err'] = "<p  class='alert alert-warning'>Max character number 50.!</p>";
    }
    //skill  color validation
    if (strlen($skill_color) >= 50) {
        $error['skill_color_err'] = "<p  class='alert alert-warning'>Max character color text 50.!</p>";
    }
    //insert query
    if (empty($error)) {

        $query = "UPDATE skills SET title='$title',skill_number='$skill_number',skill_percent='$skill_percent',skill_color='$skill_color' WHERE id='$id'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            //$_SESSION['service_mess'] = "<p  class='alert alert-success'>New user add successfull!</p>";
            header("location:all_skills_view.php");
        }
    }
}
