<?php
  require_once "../../db_con.php";
    $result = mysqli_query($connect,"SELECT status FROM why_us WHERE id = 1 ");
    if(mysqli_num_rows($result) > 0){
        $why_us = mysqli_fetch_assoc($result);
    }
    if($why_us['status'] == 1){
        mysqli_query($connect,"UPDATE why_us SET status = 2 WHERE id= 1 ");
    }else{
        mysqli_query($connect,"UPDATE why_us SET status = 1 WHERE id= 1 ");
    }
    header("location:why_us_view.php");
