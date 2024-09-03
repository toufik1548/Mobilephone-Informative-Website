<?php
$news_id = $_GET["news_id"];
?>


<?php
if(isset($_POST['SUBMIT'])){
    

    //temparary uploaded file
    $tmp_name = $_FILES["file_name"]["tmp_name"];

    //getting file name // time()."-". for pre-fix
    $filename=time()."-".$_FILES["file_name"]["name"];

    //uploading file in target folder
    move_uploaded_file($tmp_name, $site_url."/images/news/".$filename);

    // Convert the uploaded image to JPG format
    $image_path = "../images/brands/".$filename;

    // Create an image resource from the original file
    $image = imagecreatefromstring(file_get_contents($image_path));

    // Resize the image to 200x200 pixels
    $resized_image = imagescale($image, 100, 100);

    // Save the resized image in JPG format with "jpg" extension
    imagejpeg($resized_image, $image_path . ".jpg", 100);

    // Free up memory
    imagedestroy($image);
    imagedestroy($resized_image);
    
    // Update $filename to include the "jpg" extension
    $filename .= ".jpg";

    mysqli_query($con,"UPDATE mobile_news SET news_photo='$filename' WHERE news_id=$news_id");
}
?>




<?php
$q = mysqli_query($con, "SELECT * FROM mobile_news WHERE status=1 AND news_id=$news_id");
$ra = mysqli_fetch_assoc($q);
?>




<div class="m-5">
	
    <img src="<?php echo $site_url; ?>/images/news/<?php echo $ra["news_photo"]; ?>" style="width: 200px; height: 150px">
    <h4><?php echo $ra["news_title"]; ?></h4>	
</div>

    







<form method="POST" action="" class="pt-2 m-5" enctype="multipart/form-data">
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="file_name">Add Picture:</label>
        <input type="file" class="form-control" name="file_name" value="file_name">
    </div><br>
    <input type="SUBMIT" name="SUBMIT" VALUE="SUBMIT">
</form>
