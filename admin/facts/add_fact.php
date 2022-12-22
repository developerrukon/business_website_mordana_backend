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
        $error['fact_number_err'] = "<p class='alert alert-warning'>please!fact number must be.</p>";
    }elseif(strlen($fact_number) >= 20) {
        $error['fact_number_err'] = "<p class='alert alert-warning'>Max character title 20.!</p>";
    }
    if (empty($error)) {

        $query = "INSERT INTO facts(title, fact_number) VALUES ('$title','$fact_number')";
        $result = mysqli_query($connect, $query);
        if ($result) {
            //$_SESSION['service_mess'] = "<p  class='alert alert-success'>New user add successfull!</p>";
            header("location:all_facts_view.php");
        }
    }
}
