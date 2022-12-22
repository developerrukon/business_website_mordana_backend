<?php

require_once "db_con.php";
//banners query start
  $query = "SELECT * FROM banners";
  $result = mysqli_query($connect,$query);
  if(mysqli_num_rows($result) > 0){
      $banners = mysqli_fetch_all($result, true);
  }
// banners query end

//services query start
$query = "SELECT * FROM services";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $services = mysqli_fetch_all($result, true);
}
// services query end

// why-us query start

$query = "SELECT * FROM why_us WHERE id = 1 ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $why_us = mysqli_fetch_assoc($result);
}

// why-us query end

// features query start
$query = "SELECT * FROM features";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $features = mysqli_fetch_all($result, true);
}
// features query end

// settings query start
$query = "SELECT * FROM settings WHERE id = 1 ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $settings = mysqli_fetch_assoc($result);
     
}
// settings query end
