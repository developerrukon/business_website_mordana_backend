<?php
    require_once "../../db_con.php";
    $query = "SELECT * FROM banners";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result) > 0){
        $banners = mysqli_fetch_all($result, true);
    }