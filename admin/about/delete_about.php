<?php
require_once  "../../db_con.php";
$query = "DELETE FROM about WHERE id= 1 ";
$result = mysqli_query($connect,$query);
if($result){
    header("location:details_about_view.php.php");
}