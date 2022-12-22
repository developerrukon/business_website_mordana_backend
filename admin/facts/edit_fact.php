<?php

require_once "../../db_con.php";
$error = [];
if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $fact_number = trim(htmlentities($_POST['fact_number']));
// title validation
    if (empty($title)) {
        $error['title_err'] = "<p class='alert alert-warning'>please!title must be.</p>";
    }elseif (strlen($title) >= 50) {
        $error['title_err'] = "<p  class='alert alert-warning'>Max character title 50.!</p>";
    }
//fact validation
    if (empty($fact_number)) {
        $error['fact_err'] = "<p class='alert alert-warning'>please!facts number must be.</p>";
    }elseif(strlen($fact_number) >= 20) {
        $error['fact_err'] = "<p class='alert alert-warning'>Max character title 20.!</p>";
    }
    if (empty($error)) {

        $query = "UPDATE facts SET title='$title',fact_number='$fact_number' WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            //$_SESSION['service_mess'] = "<p  class='alert alert-success'>New user add successfull!</p>";
            header("location:all_facts_view.php");
        }
    }
}
