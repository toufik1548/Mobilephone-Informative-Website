
<div class="container p-3">

<h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">Mobile Edit</h4>

<?php
$mobile_id = $_GET['mobile_id'];
?>

<?php
if (isset($_POST['submit'])) {

    $brand_id               = $_POST['brand_id'];
    $mobile_name            = addslashes(trim($_POST['mobile_name']));

    $mobile_features        = addslashes($_POST['mobile_features']);
    $mobile_network         = addslashes($_POST['mobile_network']);
    $mobile_sim             = addslashes($_POST['mobile_sim']);
    $mobile_ram             = addslashes($_POST['mobile_ram']);
    $mobile_rom             = addslashes($_POST['mobile_rom']);
    $mobile_processor       = addslashes($_POST['mobile_processor']);
    $mobile_chipset         = addslashes($_POST['mobile_chipset']);
    $mobile_sensors         = addslashes($_POST['mobile_sensors']);
    $mobile_battery         = addslashes($_POST['mobile_battery']);
    $mobile_made            = addslashes($_POST['mobile_made']);
    $body_weight            = addslashes($_POST['body_weight']);
    $body_size              = addslashes($_POST['body_size']);
    $body_color             = addslashes($_POST['body_color']);
    $display_type           = addslashes($_POST['display_type']);
    $display_size           = addslashes($_POST['display_size']);
    $display_resolution     = addslashes($_POST['display_resolution']);
    $display_protection     = addslashes($_POST['display_protection']);
    $operating_os           = addslashes($_POST['operating_os']);
    $camera_resolutionfront = addslashes($_POST['camera_resolutionfront']);
    $camera_featuresfront   = addslashes($_POST['camera_featuresfront']);
    $camera_videofront      = addslashes($_POST['camera_videofront']);
    $camera_resolutionback  = addslashes($_POST['camera_resolutionback']);
    $camera_featuresback    = addslashes($_POST['camera_featuresback']);
    $camera_videoback       = addslashes($_POST['camera_videoback']);
    $connectivity_wlan      = addslashes($_POST['connectivity_wlan']);
    $connectivity_bluetooth = addslashes($_POST['connectivity_bluetooth']);
    $connectivity_usb       = addslashes($_POST['connectivity_usb']);
    $connectivity_otg       = addslashes($_POST['connectivity_otg']);
    $connectivity_gps       = addslashes($_POST['connectivity_gps']);
    $release_date           = $_POST['release_date'];

    $mobile_details         = addslashes($_POST['mobile_details']);
    $add_date               = $_POST['add_date'];
    $status                 = $_POST['status'];

    $q = mysqli_query($con, "UPDATE mobile_specs SET brand_id='$brand_id', mobile_name='$mobile_name', mobile_features='$mobile_features', mobile_network='$mobile_network', mobile_sim='$mobile_sim', mobile_ram='$mobile_ram', mobile_rom='$mobile_rom', mobile_processor='$mobile_processor', mobile_chipset='$mobile_chipset', mobile_sensors='$mobile_sensors', mobile_battery='$mobile_battery', mobile_made='$mobile_made', body_weight='$body_weight', body_size='$body_size', body_color='$body_color', display_type='$display_type', display_size='$display_size', display_resolution='$display_resolution', display_protection='$display_protection', operating_os='$operating_os', camera_resolutionfront='$camera_resolutionfront', camera_featuresfront='$camera_featuresfront', camera_videofront='$camera_videofront', camera_resolutionback='$camera_resolutionback', camera_featuresback='$camera_featuresback', camera_videoback='$camera_videoback', connectivity_wlan='$connectivity_wlan', connectivity_bluetooth='$connectivity_bluetooth', connectivity_usb='$connectivity_usb', connectivity_otg='$connectivity_otg', connectivity_gps='$connectivity_gps', connectivity_gps='$connectivity_gps', release_date='$release_date', mobile_details='$mobile_details', add_date='$add_date', status='$status' WHERE mobile_id='$mobile_id'");

    if ($q) {
        echo "Updated Successfully";
    } else {
        echo "Failed!, Try Again";
    }
}
?>

<?php
$qa = mysqli_query($con, "SELECT * FROM mobile_specs WHERE mobile_id='$mobile_id'");
$ra = mysqli_fetch_assoc($qa);
?>

<form method="POST" action="" class="pt-2">
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
        <label class="pt-2 fw-bolder" for="mobile_name">Mobile Name:</label>
        <input type="text" class="form-control" name="mobile_name" value="<?php echo $ra["mobile_name"]; ?>">
    </div>

    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_features">Mobile Features:</label>
        <textarea id="description" class="form-control" name="mobile_features" rows="5" cols="100" required><?php echo $ra["mobile_features"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-2 fw-bolder" for="mobile_network">Mobile Network:</label>
        <input type="text" class="form-control" name="mobile_network" value="<?php echo $ra["mobile_network"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_sim">Mobile Sim:</label>
        <input type="text" class="form-control" name="mobile_sim" value="<?php echo $ra["mobile_sim"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_ram">Mobile Ram:</label>
        <input type="text" class="form-control" name="mobile_ram" value="<?php echo $ra["mobile_ram"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_rom">Mobile Rom:</label>
        <input type="text" class="form-control" name="mobile_rom" value="<?php echo $ra["mobile_rom"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_chipset">Mobile Chipset:</label>
        <input type="text" class="form-control" name="mobile_chipset" value="<?php echo $ra["mobile_chipset"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_processor">Mobile Processor:</label>
        <input type="text" class="form-control" name="mobile_processor" value="<?php echo $ra["mobile_processor"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_sensors">Mobile Sensors:</label>
        <textarea id="description" class="form-control" name="mobile_sensors" rows="5" cols="100" required><?php echo $ra["mobile_sensors"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_battery">Mobile Battery:</label>
        <input type="text" class="form-control" name="mobile_battery" value="<?php echo $ra["mobile_battery"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="mobile_made">Mobile Made:</label>
        <textarea id="description" class="form-control" name="mobile_made" rows="5" cols="100" required><?php echo $ra["mobile_made"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="body_weight">Mobile Weight:</label>
        <input type="text" class="form-control" name="body_weight" value="<?php echo $ra["body_weight"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="body_size">Mobile Size:</label>
        <input type="text" class="form-control" name="body_size" value="<?php echo $ra["body_size"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="body_color">Body Color:</label>
        <input type="text" class="form-control" name="body_color" value="<?php echo $ra["body_color"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_type">Display Type:</label>
        <input type="text" class="form-control" name="display_type" value="<?php echo $ra["display_type"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_size">Display Size:</label>
        <input type="text" class="form-control" name="display_size" value="<?php echo $ra["display_size"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_resolution">Display Resolution:</label>
        <input type="text" class="form-control" name="display_resolution" value="<?php echo $ra["display_resolution"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="display_protection">Display Protection:</label>
        <input type="text" class="form-control" name="display_protection" value="<?php echo $ra["display_protection"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="operating_os">Operating OS:</label>
        <input type="text" class="form-control" name="operating_os" value="<?php echo $ra["operating_os"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_resolutionfront">Front Camera Resolution:</label>
        <textarea id="description" class="form-control" name="camera_resolutionfront" rows="5" cols="100" required><?php echo $ra["camera_resolutionfront"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_featuresfront">Front Camera Features:</label>
        <textarea id="description" class="form-control" name="camera_featuresfront" rows="5" cols="100" required><?php echo $ra["camera_featuresfront"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_videofront">Front Camera Video:</label>
        <textarea id="description" class="form-control" name="camera_videofront" rows="5" cols="100" required><?php echo $ra["camera_videofront"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_resolutionback">Back Camera Resolution:</label>
        <textarea id="description" class="form-control" name="camera_resolutionback" rows="5" cols="100" required><?php echo $ra["camera_resolutionback"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_featuresback">Back Camera Features:</label>
        <textarea id="description" class="form-control" name="camera_featuresback" rows="5" cols="100" required><?php echo $ra["camera_featuresback"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="camera_videoback">Back Camera Video:</label>
        <textarea id="description" class="form-control" name="camera_videoback" rows="5" cols="100" required><?php echo $ra["camera_videoback"]; ?></textarea>
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_wlan">Connectivity Wlan:</label>
        <input type="text" class="form-control" name="connectivity_wlan" value="<?php echo $ra["connectivity_wlan"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_bluetooth">Connectivity Bluetooth:</label>
        <input type="text" class="form-control" name="connectivity_bluetooth" value="<?php echo $ra["connectivity_bluetooth"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_usb">Connectivity USB:</label>
        <input type="text" class="form-control" name="connectivity_usb" value="<?php echo $ra["connectivity_usb"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_otg">Connectivity OTG:</label>
        <input type="text" class="form-control" name="connectivity_otg" value="<?php echo $ra["connectivity_otg"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="connectivity_gps">Connectivity GPS:</label>
        <input type="text" class="form-control" name="connectivity_gps" value="<?php echo $ra["connectivity_gps"]; ?>">
    </div>
    <div class="form-group">
        <label class="pt-3 fw-bolder" for="release_date">Release Date:</label>
        <input type="Date" class="form-control" name="release_date" value="release_date">
    </div>

    <div class="form-group">
        <label class="pt-2 fw-bolder" for="mobile_details">Mobile Details:</label>
        <textarea id="description" class="form-control" name="mobile_details" rows="5" cols="100" required><?php echo $ra["mobile_details"]; ?></textarea>
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

