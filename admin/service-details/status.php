<?php
  require_once "../../db_con.php";
  $id = $_GET['id'];
  if($id && (int)$id){
    $result = mysqli_query($connect,"SELECT status FROM service_details WHERE id = '$id'");
    if(mysqli_num_rows($result) > 0){
        $feature = mysqli_fetch_assoc($result);
    }
    if($feature['status'] == 1){
        mysqli_query($connect,"UPDATE service_details SET status = 2 WHERE id= '$id'");
    }else{
        mysqli_query($connect,"UPDATE service_details SET status = 1 WHERE id= '$id'");
    }
    header("location:all_services_view.php");


  }
