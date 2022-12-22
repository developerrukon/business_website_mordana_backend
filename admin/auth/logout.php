<?php
session_start();
session_destroy();
header("location:http://localhost/moderna/admin/auth/login_email_view.php");
?>