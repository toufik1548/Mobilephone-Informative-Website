<?php

$admin_email=trim($_POST["email"]); 
$admin_password=trim($_POST["password"]); 
$admin_password_db = md5($admin_password);


include("../configs/config.php");

$query = "SELECT * FROM `mobile_admins` WHERE `status`=1 AND `admin_email`='$admin_email' AND admin_password='$admin_password_db'";
$qa = mysqli_query($con,$query);
$ra=mysqli_fetch_assoc($qa);
$admin_id = $ra["admin_id"];


session_start();
$_SESSION['sess_admin_id']=$admin_id;
header("location: index.php");

?>