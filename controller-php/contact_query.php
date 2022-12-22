<?php
// contact query
$query = "SELECT * FROM contacts ";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $contacts = mysqli_fetch_all($result, true);
}

// contact query