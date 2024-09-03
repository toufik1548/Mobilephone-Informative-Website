<div class="container p-3">

<h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">Add Mobile</h4>


<?php

if(isset($_POST['SUBMIT'])){
    
    $brand_id                = $_POST['brand_id'];

    $mobile_name                = trim($_POST['mobile_name']);
    $mobile_slug                = dv_slug($mobile_name);

    $mobile_features            = $_POST['mobile_features'];
    $mobile_network             = $_POST['mobile_network'];
    $mobile_sim                 = $_POST['mobile_sim'];
    $mobile_ram                 = $_POST['mobile_ram'];
    $mobile_rom                 = $_POST['mobile_rom'];
    $mobile_processor           = $_POST['mobile_processor'];
    $mobile_chipset             = $_POST['mobile_chipset'];
    $mobile_sensors             = $_POST['mobile_sensors'];
    $mobile_battery             = $_POST['mobile_battery'];
    $mobile_made                = $_POST['mobile_made'];
    $body_weight                = $_POST['body_weight'];
    $body_size                  = $_POST['body_size'];
    $body_color                 = $_POST['body_color'];
    $display_type               = $_POST['display_type'];
    $display_size               = $_POST['display_size'];
    $display_resolution         = $_POST['display_resolution'];
    $display_protection         = $_POST['display_protection'];
    $operating_os               = $_POST['operating_os'];
    $camera_resolutionfront     = $_POST['camera_resolutionfront'];
    $camera_featuresfront       = $_POST['camera_featuresfront'];
    $camera_videofront          = $_POST['camera_videofront'];
    $camera_resolutionback      = $_POST['camera_resolutionback'];
    $camera_featuresback        = $_POST['camera_featuresback'];
    $camera_videoback           = $_POST['camera_videoback'];
    $connectivity_wlan          = $_POST['connectivity_wlan'];
    $connectivity_bluetooth     = $_POST['connectivity_bluetooth'];
    $connectivity_usb           = $_POST['connectivity_usb'];
    $connectivity_otg           = $_POST['connectivity_otg'];
    $connectivity_gps           = $_POST['connectivity_gps'];
    $release_date               = $_POST['release_date'];

    $mobile_details             = $_POST['mobile_details'];
    $mobile_price               = $_POST['mobile_price'];
    $add_date                   = date("Y-m-d");
     


    //temparary uploaded file
    $tmp_name = $_FILES["file_name"]["tmp_name"];

    //getting file name // time()."-". for pre-fix
    $filename=time()."-".$_FILES["file_name"]["name"];

    //uploading file in target folder
    move_uploaded_file($tmp_name, "../images/products/".$filename);

    // Convert the uploaded image to JPG format
    $image_path = "../images/products/".$filename;

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


    //Display error msg
    $err=array();

    if($mobile_name==""){ $err[]="Please type Mobile Name";}  
  
    $n= count($err);

if($n>0){
    echo "<div class=\"alert alert-danger\" role=\"alert\"><ol>";

    for($i=0;$i<$n;$i++){ echo "".$err[$i]."<br>"; }
    echo "</ol></div>";

}else{ 

    $query=mysqli_query($con,"INSERT INTO `mobile_specs` (
    `mobile_id`,
    `brand_id`,
    `mobile_name`,
    `mobile_slug`,
    `mobile_features`,
    `mobile_network`,
    `mobile_sim`,
    `mobile_ram`,
    `mobile_rom`,
    `mobile_processor`,
    `mobile_chipset`,
    `mobile_sensors`,
    `mobile_battery`,
    `mobile_made`,
    `body_weight`,
    `body_size`,
    `body_color`,
    `display_type`,
    `display_size`,
    `display_resolution`,
    `display_protection`,
    `operating_os`,
    `camera_resolutionfront`,
    `camera_featuresfront`,
    `camera_videofront`,
    `camera_resolutionback`,
    `camera_featuresback`,
    `camera_videoback`,
    `connectivity_wlan`,
    `connectivity_bluetooth`,
    `connectivity_usb`,
    `connectivity_otg`,
    `connectivity_gps`,
    `release_date`,

    `mobile_details`,
    `mobile_price`,
    `add_date`,
    `mobile_photo`,
    `status`
    ) VALUES(
    NULL, 
    
    '$brand_id',
    '$mobile_name',
    '$mobile_slug',

    '$mobile_features',
    '$mobile_network',
    '$mobile_sim',
    '$mobile_ram',
    '$mobile_rom',
    '$mobile_processor',
    '$mobile_chipset',
    '$mobile_sensors',
    '$mobile_battery',
    '$mobile_made',
    '$body_weight',
    '$body_size',
    '$body_color',
    '$display_type',
    '$display_size',
    '$display_resolution',
    '$display_protection',
    '$operating_os',
    '$camera_resolutionfront',
    '$camera_featuresfront',
    '$camera_videofront',
    '$camera_resolutionback',
    '$camera_featuresback',
    '$camera_videoback',
    '$connectivity_wlan',
    '$connectivity_bluetooth',
    '$connectivity_usb',
    '$connectivity_otg',
    '$connectivity_gps',
    '$release_date',

    '$mobile_details',
    '$mobile_price',
    '$add_date',
    '$filename',
    1
    )"
    );



    if($query){
        $mobile_id = mysqli_insert_id($con);

    echo "Mobile Add Successfully !! <a href='$site_url/dashboard/index.php?target=photo_add&mobile_id=$mobile_id'>ADD MORE PHOTO</a>";
    }else{
    echo "Sorry!!! Failed to add record! Please Try Again";

}

}

}

?>


<form method="POST" action="" class="pt-2" enctype="multipart/form-data">
    <div class="form-group">
        <label class="pt-2 fw-bolder" for="brand_id">Brand ID:</label>
        <select name="brand_id">
            <?php          
                $qb = mysqli_query($con, "SELECT brand_id,brand_name FROM mobile_brands ORDER BY brand_name ASC");
                while($rb = mysqli_fetch_assoc($qb)){ ?>

            <option value="<?php echo $rb["brand_id"]; ?>"><?php echo $rb["brand_name"]; ?></option> 

            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_name">Mobile Name:</label>
        <input type="text" class="form-control" name="mobile_name">
    </div>


    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_features">Mobile Features:</label>
        <textarea class="form-control" name="mobile_features" id="mobile_features" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_network">Mobile Network:</label>
        <textarea class="form-control" name="mobile_network" id="mobile_network" rows="2"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_sim">Mobile Sim:</label>
        <input type="text" class="form-control" name="mobile_sim">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_ram">Mobile Ram:</label>
        <input type="text" class="form-control" name="mobile_ram">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_rom">Mobile Rom:</label>
        <input type="text" class="form-control" name="mobile_rom">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_processor">Mobile Processor:</label>
        <input type="text" class="form-control" name="mobile_processor">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_chipset">Mobile Chipset:</label>
        <input type="text" class="form-control" name="mobile_chipset">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_sensors">Mobile Sensors:</label>
        <textarea class="form-control" name="mobile_sensors" id="mobile_sensors" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_battery">Mobile Battery:</label>
        <input type="text" class="form-control" name="mobile_battery">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_made">Mobile Made:</label>
        <textarea class="form-control" name="mobile_made" id="mobile_made" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="body_weight">Mobile Weight:</label>
        <input type="text" class="form-control" name="body_weight">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="body_size">Mobile Size:</label>
        <input type="text" class="form-control" name="body_size">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="body_color">Body Color:</label>
        <input type="text" class="form-control" name="body_color">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_type">Display Type:</label>
        <input type="text" class="form-control" name="display_type">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_size">Display Size:</label>
        <input type="text" class="form-control" name="display_size">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_resolution">Display Resolution:</label>
        <input type="text" class="form-control" name="display_resolution">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_protection">Display Protection:</label>
        <input type="text" class="form-control" name="display_protection">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="operating_os">Operating OS:</label>
        <input type="text" class="form-control" name="operating_os">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_resolutionfront">Front Camera Resolution:</label>
        <textarea class="form-control" name="camera_resolutionfront" id="camera_resolutionfront" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_featuresfront">Front Camera Features:</label>
        <textarea class="form-control" name="camera_featuresfront" id="camera_featuresfront" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_videofront">Front Camera Video:</label>
        <textarea class="form-control" name="camera_videofront" id="camera_videofront" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_resolutionback">Back Camera Resolution:</label>
        <textarea class="form-control" name="camera_resolutionback" id="camera_resolutionback" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_featuresback">Back Camera Features:</label>
        <textarea class="form-control" name="camera_featuresback" id="camera_featuresback" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_videoback">Back Camera Video:</label>
        <textarea class="form-control" name="camera_videoback" id="camera_videoback" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_wlan">Connectivity Wlan:</label>
        <input type="text" class="form-control" name="connectivity_wlan">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_bluetooth">Connectivity Bluetooth:</label>
        <input type="text" class="form-control" name="connectivity_bluetooth">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_usb">Connectivity USB:</label>
        <input type="text" class="form-control" name="connectivity_usb">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_otg">Connectivity OTG:</label>
        <input type="text" class="form-control" name="connectivity_otg">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_gps">Connectivity GPS:</label>
        <input type="text" class="form-control" name="connectivity_gps">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="release_date">Release Date:</label>
        <input type="Date" class="form-control" name="release_date" value="release_date">
    </div>



    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_details">Mobile Details:</label>
        <textarea class="form-control" name="mobile_details" id="mobile_details" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_price">Mobile Price</label>
        <input type="number" class="form-control" name="mobile_price">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="add_date">Add Date:</label>
        <input type="Date" class="form-control" name="add_date" value="add_date">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="file_name">Add Picture:</label>
        <input type="file" class="form-control" name="file_name" value="file_name">
    </div><br>
    <input type="SUBMIT" name="SUBMIT" VALUE="SUBMIT">
</form>
</div>




