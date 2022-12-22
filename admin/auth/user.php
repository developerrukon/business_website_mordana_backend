<?php

    require_once "../../db_con.php";

    

   if($_SESSION['info']['id']){
    $user_id = $_SESSION['info']['id'];
    $select_query = "SELECT * FROM users WHERE id ='$user_id'";
    $select_result = mysqli_query($connect,$select_query);
    if(mysqli_num_rows($select_result) > 0){
     $user = mysqli_fetch_assoc($select_result);
    }
}