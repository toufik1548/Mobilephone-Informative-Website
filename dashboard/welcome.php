

<?php 

$q = mysqli_query($con, "SELECT admin_name FROM mobile_admins WHERE admin_id = $logged_admin_id");
$row = mysqli_fetch_assoc($q);
$admin_name = $row['admin_name'];
?>
<div class="text-center">
	<h1 class="p-5 text-info">Welcome <?php echo $admin_name; ?> to this Dashboard</h1>
</div>
