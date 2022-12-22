<?php
  require_once "../../db_con.php";
  $query = "SELECT * FROM about WHERE id = 1 ";
  $result = mysqli_query($connect,$query);
  if(mysqli_num_rows($result) > 0){
      $about = mysqli_fetch_assoc($result);
  }
