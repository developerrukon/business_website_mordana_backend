<?php

// services query 
$query = "SELECT * FROM service_details";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $services_details = mysqli_fetch_all($result, true);
}
//services query

//pricings query

$query = "SELECT * FROM pricings ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $pricings = mysqli_fetch_all($result, true);
}
//pricings query