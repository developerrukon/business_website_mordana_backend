<?php
  require_once "../../db_con.php";

    $result = mysqli_query($connect,"SELECT status FROM about WHERE id = 1");
    if(mysqli_num_rows($result) > 0){
        $feature = mysqli_fetch_assoc($result);
    }
    if($feature['status'] == 1){
        mysqli_query($connect,"UPDATE about SET status = 2 WHERE id= 1");
    }else{
        mysqli_query($connect,"UPDATE about SET status = 1 WHERE id= 1");
    }
    header("location:details_about_view.php");
