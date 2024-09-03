<?php
include("configs/config.php");
include("configs/functions.php");
include("configs/router.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php include("head.php"); ?>
	<style type="text/css">
		body{
			background-color: whitesmoke;
		}
	</style>
</head>
<body>

<?php include("header.php"); ?>

<div class="container-fluid pt-3">
	<div class="row m-2">
		<?php include("livesearch_form.php"); ?>
		<div class="col col-md-2 p-3 d-none d-md-block" style="background-color: #d0d0d0;">
		<?php include("left_menu.php"); ?>
		</div>

		<div class="col col-md-10">
		<?php include("include.php"); ?>
		</div>

	</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>