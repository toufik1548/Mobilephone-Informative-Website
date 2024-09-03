
<div class="container p-3">

    <h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">Add News</h4>

    <?php
    // Initialize variables to store form values
    $newsTitleValue = isset($_POST['news_title']) ? $_POST['news_title'] : '';
    $categoryValue = isset($_POST['category_id']) ? $_POST['category_id'] : 0;
    $newsDetailsValue = isset($_POST['news_details']) ? $_POST['news_details'] : '';
    ?>

    <?php

    if(isset($_POST['SUBMIT'])){
        
        $news_title     = trim($_POST['news_title']);
        $category_id    = $_POST['category_id'];
        $news_details   = $_POST['news_details'];
        $add_date       = date("Y-m-d");

        // Validation for required fields
        $err = array();
        if(empty($news_title)) { $err[] = "Please type News Title"; }
        if($category_id == 0) { $err[] = "Please select News Category"; }
        if(empty($news_details)) { $err[] = "Please provide News Details"; }

        // Validate image upload
        if(!isset($_FILES["file_name"]) || $_FILES["file_name"]["error"] != 0) {
            $err[] = "Please select a valid image file";
        } else {
            $allowed_types = array("image/jpeg", "image/jpg");
            if(!in_array($_FILES["file_name"]["type"], $allowed_types)) {
                $err[] = "Invalid image file type. Please upload a JPEG image.";
            }
        }

        $n = count($err);

        if($n > 0){
            echo "<div class=\"alert alert-danger\" role=\"alert\"><ol>";

            for($i = 0; $i < $n; $i++){ echo "".$err[$i]."<br>"; }
            echo "</ol></div>";

        } else {
            // Continue with the rest of your code for file upload and database insertion
            
            // Temporary uploaded file
            $tmp_name = $_FILES["file_name"]["tmp_name"];

            // Getting file name // time()."-". for pre-fix
            $filename = time()."-".$_FILES["file_name"]["name"];

            // Uploading file in the target folder
            move_uploaded_file($tmp_name, "../images/news/".$filename);

            // Convert the uploaded image to JPG format
            $image_path = "../images/news/".$filename;

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

            // Your existing code for database insertion goes here
            // ...

            $query = mysqli_query($con, "INSERT INTO `mobile_news` (
                `news_id`,
                `category_id`,
                `news_title`,
                `news_details`,
                `news_photo`,
                `add_date`,
                `status`
            ) VALUES (
                NULL, 
                '$category_id',
                '$news_title',
                '$news_details',
                '$filename',
                '$add_date',
                1
            )");

            // Display success or failure message
            if($query){
                echo "News Add Successfully";
            } else {
                echo "Sorry!!! Failed to add record! Please Try Again";
            }
        }
    }

    ?>

    <form method="POST" action="" class="pt-2" enctype="multipart/form-data">
            <div class="form-group">
                <label class="pt-2 fw-bolder" for="category_id">Category:</label>
                <select name="category_id">
                    <option value="0" <?php echo $categoryValue == 0 ? 'selected' : ''; ?>>Select News Category</option>
                    <?php
                    $qb = mysqli_query($con, "SELECT * FROM mobile_news_categories ORDER BY category_name ASC");
                    while ($rb = mysqli_fetch_assoc($qb)) { ?>
                        <option value="<?php echo $rb["category_id"]; ?>" <?php echo $categoryValue == $rb["category_id"] ? 'selected' : ''; ?>><?php echo $rb["category_name"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label class="pt-3 fw-bolder" for="news_title">News Title</label>
                <input type="text" class="form-control" name="news_title" value="<?php echo $newsTitleValue; ?>">
            </div>
            <div class="form-group">
                <label class="pt-3 fw-bolder" for="news_details">News Details</label>
                <textarea class="form-control" name="news_details" id="news_details" rows="4"><?php echo $newsDetailsValue; ?></textarea>
            </div>
            <div class="form-group">
                <label class="pt-3 fw-bolder" for="file_name">Add Picture:</label>
                <input type="file" class="form-control" name="file_name">
                <?php
                if (isset($_FILES["file_name"]["error"]) && $_FILES["file_name"]["error"] != 0) {
                    echo "<p class=\"text-danger\">Please select a valid image file</p>";
                }
                ?>
            </div><br>

            <input type="submit" name="SUBMIT" value="SUBMIT">
        </form>
</div>