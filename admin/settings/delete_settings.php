<?php
require_once  "../../db_con.php";
$query = "DELETE FROM settings WHERE id= 1 ";
$result = mysqli_query($connect,$query);
if($result){
    header("location:why_us_view.php");
}