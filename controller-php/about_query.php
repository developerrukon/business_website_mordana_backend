<?php

require_once "db_con.php";
//about query start
$query = "SELECT * FROM about WHERE id = 1 ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $about = mysqli_fetch_assoc($result);
}

//about query end

//facts query start

$query = "SELECT * FROM facts ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $facts = mysqli_fetch_all($result, true);
}

//facts query end
//skill query start

$query = "SELECT * FROM skills ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $skills = mysqli_fetch_all($result, true);
}

//skill query end
//testimonials query start
$query = "SELECT * FROM testimonials";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $testimonials = mysqli_fetch_all($result, true);
}

//testimonials query end

