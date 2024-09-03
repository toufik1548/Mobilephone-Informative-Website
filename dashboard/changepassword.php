<?php
include("../configs/config.php");
?>

<?php
if (isset($_POST['update_password'])) {
    $old_admin_password 		= trim($_POST['old_admin_password']);
    $admin_password 			= trim($_POST['admin_password']);
    $admin_retype_password 		= trim($_POST['admin_retype_password']);

    $old_admin_password_db 		= md5($old_admin_password); 

    $check_old_password 			= mysqli_query($con, "SELECT * FROM `mobile_admins` WHERE `admin_id`='$logged_admin_id' AND `admin_password`='$old_admin_password_db' AND `status`=1");

    if (mysqli_num_rows($check_old_password) != 1) {
        echo "Incorrect old password. Please re-enter.";
    } elseif ($admin_password != $admin_retype_password) {
        echo "Passwords do not match. Please re-enter.";
    } else {
        $admin_password_db = md5($admin_password);

        $update_query = mysqli_query($con, "UPDATE `mobile_admins` SET `admin_password`='$admin_password_db' WHERE `status`=1 AND `admin_id`='$logged_admin_id'");

        if ($update_query) {
            echo "Updated Successfully";
        } else {
            echo "Failed! Try Again";
        }
    }
}
?>

<h3 class="mt-4">Change your password</h3>

<div class="alert alert-danger">
  <strong>Change Password!</strong><br>Please use strong password. Do not use '123' or 'abc' type password
</div>

<div class="p-5">

    <form action="" method="POST">

        <label for="old_admin_password">Old Password:</label><br>
        <input type="password" id="old_admin_password" name="old_admin_password" required><br>

        <label for="admin_password">New Password:</label><br>
        <input type="password" id="admin_password" name="admin_password" required><br>

        <label for="admin_retype_password">Re-type Password:</label><br>
        <input type="password" id="admin_retype_password" name="admin_retype_password" required><br>

        <input type="submit" name="update_password" value="Submit">
    </form>
</div>



