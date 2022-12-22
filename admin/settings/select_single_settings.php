<?php
  require_once "../../db_con.php";
  $query = "SELECT * FROM settings WHERE id = 1 ";
  $result = mysqli_query($connect,$query);
  if(mysqli_num_rows($result) > 0){
      $settings = mysqli_fetch_assoc($result);
  }
