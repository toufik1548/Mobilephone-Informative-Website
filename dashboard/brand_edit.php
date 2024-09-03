
<div class="container p-3">

<h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">Mobile Edit</h4>

<?php
$brand_id = $_GET['brand_id'];
?>

<?php

if (isset($_POST['submit'])) {
    $brand_name = addslashes($_POST['brand_name']);
    $status = $_POST['status'];

    $q = mysqli_query($con, "UPDATE mobile_brands SET brand_name='$brand_name', status='$status' WHERE brand_id='$brand_id'");

    if ($q) {
        echo "Updated Successfully";
    } else {
        echo "Failed!, Try Again";
    }
}
?>

<?php
$query = "SELECT * FROM mobile_brands WHERE brand_id='$brand_id'";
$qa = mysqli_query($con, $query);
$ra = mysqli_fetch_assoc($qa);
?>


<form method="POST" action="" class="pt-2">
    <div class="form-group">
        <label class="pt-2 fw-bolder" for="brand_name">Brand Name:</label>
        <input type="text" class="form-control" name="brand_name" value="<?php echo $ra["brand_name"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-2 fw-bolder" for="status">Status:</label><br>
        <select name="status">
            <option value="1">Active</option>
            <option value="2">Inactive</option>
        </select>
    </div><br>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>

