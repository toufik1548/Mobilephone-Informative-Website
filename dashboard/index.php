<?php
// Start the session
session_start();
if(!isset($_SESSION['sess_admin_id'])){
header("location: login.php");
}

$logged_admin_id = $_SESSION['sess_admin_id'];
?>
<?php
include("../configs/config.php");
include("../configs/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobile-Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<style>
    table,th,tr,td{
        border: 1px solid black;
    }
</style>
</head>
<body>

<?php include("header_menu.php"); ?>
<h1 class="container text-center mt-1 p-3 bg-primary rounded bg-opacity-25">Mobile Shopping</h1>


<?php

if(isset($_GET["target"])){

$myfile = $_GET["target"];
include($myfile.".php");

}else{include("welcome.php");}


?>

<hr>
<?php include("footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>