<?php
  require_once "../../db_con.php";
  $id = $_GET['id'];
  if($id && (int)$id){
    $result = mysqli_query($connect,"SELECT status FROM pricings WHERE id = '$id'");
    if(mysqli_num_rows($result) > 0){
        $service = mysqli_fetch_assoc($result);
    }
    if($service['status'] == 1){
        mysqli_query($connect,"UPDATE pricings SET status = 2 WHERE id= '$id'");
    }else{
        mysqli_query($connect,"UPDATE pricings SET status = 1 WHERE id= '$id'");
    }
    header("location:all_pricings_view.php");


  }
