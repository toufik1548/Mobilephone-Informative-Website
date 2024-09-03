<?php
$brand_id = $_GET["brand_id"];
?>


<?php
if(isset($_POST['SUBMIT'])){
    

    //temparary uploaded file
    $tmp_name = $_FILES["file_name"]["tmp_name"];

    //getting file name // time()."-". for pre-fix
    $filename=time()."-".$_FILES["file_name"]["name"];

    //uploading file in target folder
    move_uploaded_file($tmp_name, "../images/brands/".$filename);

    // Convert the uploaded image to JPG format
    $image_path = "../images/brands/".$filename;

    // Create an image resource from the original file
    $image = imagecreatefromstring(file_get_contents($image_path));

    // Resize the image to 200x200 pixels
    $resized_image = imagescale($image, 200, 150);

    // Save the resized image in JPG format with "jpg" extension
    imagejpeg($resized_image, $image_path . ".jpg", 100);

    // Free up memory
    imagedestroy($image);
    imagedestroy($resized_image);
    
    // Update $filename to include the "jpg" extension
    $filename .= ".jpg";


    mysqli_query($con,"UPDATE mobile_brands SET brand_logo='$filename' WHERE brand_id=$brand_id");
}
?>




<?php
$q = mysqli_query($con, "SELECT * FROM mobile_brands WHERE status=1 AND brand_id=$brand_id");
$ra = mysqli_fetch_assoc($q);
?>




<div class="m-5">
	
    <img src="<?php echo $site_url; ?>/images/brands/<?php echo $ra["brand_logo"]; ?>" style="width: 200px; height: 150px">
    <h4><?php echo $ra["brand_name"]; ?></h4>	
</div>

    







<form method="POST" action="" class="pt-2 m-5" enctype="multipart/form-data">
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="file_name">Add Picture:</label>
        <input type="file" class="form-control" name="file_name" value="file_name">
    </div><br>
    <input type="SUBMIT" name="SUBMIT" VALUE="SUBMIT">
</form>
