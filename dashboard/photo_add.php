<?php
$mobile_id = $_GET['mobile_id'];
$q = mysqli_query($con,"SELECT * FROM mobile_specs WHERE mobile_id =$mobile_id AND status=1");
$r = mysqli_fetch_assoc($q);

if(isset($_POST['SUBMIT'])) {
    // Loop through each uploaded file
    for ($i = 0; $i < count($_FILES["file_name"]["name"]); $i++) {
        // Temporary uploaded file
        $tmp_name = $_FILES["file_name"]["tmp_name"][$i];

        // Getting file name
        $filename = $r["mobile_slug"] . "_" . time() . "_" . $_FILES["file_name"]["name"][$i];

        // Uploading file to the target folder
        move_uploaded_file($tmp_name, "../images/products/" . $filename);

        // Convert the uploaded image to JPG format
        $image_path = "../images/products/" . $filename;

        // Create an image resource from the original file
        $image = imagecreatefromstring(file_get_contents($image_path));

        // Resize the image to 200x200 pixels
        $resized_image = imagescale($image, 200, 200);

        // Save the resized image in JPG format with "jpg" extension
        imagejpeg($resized_image, $image_path . ".jpg", 100);

        // Free up memory
        imagedestroy($image);
        imagedestroy($resized_image);

        // Update $filename to include the "jpg" extension
        $filename .= ".jpg";

        // Display error msg
        $err = array();

        $n = count($err);

        if ($n > 0) {
            echo "<div class=\"alert alert-danger\" role=\"alert\"><ol>";

            for ($i = 0; $i < $n; $i++) {
                echo "" . $err[$i] . "<br>";
            }
            echo "</ol></div>";
        } else {
            $query = mysqli_query($con, "INSERT INTO `mobile_photo` (
            `photo_id`,
            `mobile_id`,
            `photo_name`,
            `status`
            ) VALUES(
            NULL, 
            '$mobile_id',
            '$filename',
            1
            )"
            );
        }
    }
}
?>

<form method="POST" action="" class="pt-2" enctype="multipart/form-data">
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="file_name">Add Pictures:</label>
        <input type="file" class="form-control" name="file_name[]" multiple>
    </div><br>
    <input type="submit" name="SUBMIT" value="SUBMIT">
</form>
<br><br><br><br><br>

<!-- Rest of your code remains the same -->

<?php
if (isset($_POST['deletephoto'])) {
    $photo_id = $_POST['photo_id'];
    $q = mysqli_query($con, "UPDATE mobile_photo SET status=0 WHERE photo_id=$photo_id AND status=1");

    if ($q) {
        echo "Delete successful";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>

<br><br><br>

<?php
$qp = mysqli_query($con, "SELECT * FROM mobile_photo WHERE mobile_id=$mobile_id AND status = 1");
while ($rp = mysqli_fetch_assoc($qp)) { ?> 
    <div>
        <img src="<?php echo $site_url; ?>/images/products/<?php echo $rp["photo_name"]; ?>" alt="<?php echo $rp["photo_name"]; ?>" class="img-fluid">
        <form method="POST" action="">
            <input type="hidden" name="photo_id" value="<?php echo $rp["photo_id"]; ?>">
            <input type="submit" name="deletephoto" value="Delete">
        </form>
    </div>
<?php
}
?>
