<?php
    require_once "../../db_con.php";
    $query = "SELECT * FROM facts ";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result) > 0){
        $facts = mysqli_fetch_all($result, true);
    }