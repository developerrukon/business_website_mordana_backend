<?php
require_once  "../../db_con.php";
$query = "DELETE FROM why_us WHERE id= 1 ";
$result = mysqli_query($connect,$query);
if($result){
    header("location:why_us_view.php");
}