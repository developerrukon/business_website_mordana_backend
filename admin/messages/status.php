<?php
  require_once "../../db_con.php";
  $id = $_GET['id'];
  if($id && (int)$id){
    $result = mysqli_query($connect,"SELECT status FROM messages WHERE id = '$id'");
    if(mysqli_num_rows($result) > 0){
        $banner = mysqli_fetch_assoc($result);
    }
    if($banner['status'] == 1){
        mysqli_query($connect,"UPDATE messages SET status = 2 WHERE id= '$id'");
    }else{
        mysqli_query($connect,"UPDATE messages SET status = 1 WHERE id= '$id'");
    }
    header("location:all_messages_view.php");


  }
