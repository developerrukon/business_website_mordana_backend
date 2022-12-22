<?php
require_once  "../../db_con.php";
$id = $_GET['id'];
$query = "DELETE FROM pricings WHERE id= '$id' ";
$result = mysqli_query($connect,$query);
if($result){
    header("location:all_pricings_view.php");
}