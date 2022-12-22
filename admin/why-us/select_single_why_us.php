<?php
  require_once "../../db_con.php";
  $query = "SELECT * FROM why_us WHERE id = 1 ";
  $result = mysqli_query($connect,$query);
  if(mysqli_num_rows($result) > 0){
      $why_us = mysqli_fetch_assoc($result);
  }
