<?php
    require_once "../../db_con.php";
    $query = "SELECT * FROM messages";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result) > 0){
        $messages = mysqli_fetch_all($result, true);
    }