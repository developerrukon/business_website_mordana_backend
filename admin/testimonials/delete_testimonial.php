<?php
require_once  "../../db_con.php";
$id = $_GET['id'];
$query = "DELETE FROM testimonials WHERE id= '$id' ";
$result = mysqli_query($connect,$query);
if($result){
    header("location:all_testimonials_view.php");
}