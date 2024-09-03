<div class="container p-3">
    <h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">Add Brand</h4>

    <?php

    if(isset($_POST['SUBMIT'])){
        
    $brand_name = trim($_POST['brand_name']);
    $brand_slug = dv_slug($brand_name);
    
    // Temporary uploaded file
    $tmp_name = $_FILES["file_name"]["tmp_name"];

    // Getting file name with time prefix
    $filename = time()."-".$_FILES["file_name"]["name"];

    // Uploading file to the target folder
    move_uploaded_file($tmp_name, "../images/brands/".$filename);

    // Convert the uploaded image to JPG format
    $image_path = "../images/brands/".$filename;

    // Create an image resource from the original file
    $image = imagecreatefromstring(file_get_contents($image_path));

    // Set the new dimensions without changing the aspect ratio
    $new_width = 200;
    $new_height = 150;

    // Create a blank image with the specified dimensions
    $resized_image = imagecreatetruecolor($new_width, $new_height);

    // Preserve transparency for PNG images
    imagealphablending($resized_image, false);
    imagesavealpha($resized_image, true);

    // Copy and resize the original image to the new image
    imagecopyresampled($resized_image, $image, 0, 0, 0, 0, $new_width, $new_height, imagesx($image), imagesy($image));

    // Save the resized image in JPG format with "jpg" extension
    imagejpeg($resized_image, $image_path . ".jpg", 100);

    // Free up memory
    imagedestroy($image);
    imagedestroy($resized_image);
    
    // Update $filename to include the "jpg" extension
    $filename .= ".jpg";

        // Display error msg
        $err = array();

        if($brand_name == ""){ 
            $err[] = "Please type Brand Name";
        }

        $n = count($err);

        if($n > 0){
            echo "<div class=\"alert alert-danger\" role=\"alert\"><ol>";

            for($i = 0; $i < $n; $i++){ 
                echo "".$err[$i]."<br>"; 
            }
            echo "</ol></div>";

        } else { 

            $query = mysqli_query($con,"INSERT INTO `mobile_brands` (
            `brand_id`,
            `brand_name`,
            `brand_slug`,
            `brand_logo`,
            `status`
            ) VALUES(
            NULL, 
            '$brand_name',
            '$brand_slug',
            '$filename',
            1
            )"
            );

            if($query){
                echo "Brand Add Successfully";
            } else {
                echo "Sorry!!! Failed to add record! Please Try Again";
            }
        }
    }

    ?>

    <!-- Your HTML form remains unchanged -->
    <form method="POST" action="" class="pt-2" enctype="multipart/form-data">
        <div class="form-group">
            <label class="pt-3 fw-bolder" for="brand_name">Brand Name</label>
            <input type="text" class="form-control" name="brand_name">
        </div>
        <div class="form-group">
            <label class="pt-3 fw-bolder" for="file_name">Add Picture:</label>
            <input type="file" class="form-control" name="file_name" value="file_name">
        </div><br>
        <input type="SUBMIT" name="SUBMIT" VALUE="SUBMIT">
    </form>
</div>
