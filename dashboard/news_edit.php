
<div class="container p-3">

<h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">News Edit</h4>

<?php
$news_id = $_GET['news_id'];
?>

<?php

if (isset($_POST['submit'])) {
    $news_title = addslashes($_POST['news_title']);
    $news_details = addslashes($_POST['news_details']);
    $add_date = $_POST['add_date'];
    $status = $_POST['status'];

    $q = mysqli_query($con, "UPDATE mobile_news SET news_title='$news_title', news_details='$news_details', add_date='$add_date', status='$status' WHERE news_id='$news_id'");

    if ($q) {
        echo "Updated Successfully";
    } else {
        echo "Failed!, Try Again";
    }
}
?>

<?php
$query = "SELECT * FROM mobile_news WHERE news_id='$news_id'";
$qa = mysqli_query($con, $query);
$ra = mysqli_fetch_assoc($qa);
?>


<form method="POST" action="" class="pt-2">
    <div class="form-group">
        <label class="pt-2 fw-bolder" for="news_title">News Title:</label>
        <input type="text" class="form-control" name="news_title" value="<?php echo $ra["news_title"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="news_details">Mobile Features:</label>
        <textarea id="description" class="form-control" name="news_details" rows="5" cols="100" required><?php echo $ra["news_details"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-2 fw-bolder" for="add_date">Add Date:</label>
        <input type="Date" class="form-control" name="add_date" value="<?php echo $ra["add_date"]; ?>">
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

