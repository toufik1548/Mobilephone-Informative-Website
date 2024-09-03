
<?php
   
    // update views
    mysqli_query($con,"UPDATE mobile_specs SET views=views+1 WHERE mobile_id=$mobile_id");

    $q = mysqli_query($con,"SELECT * FROM mobile_specs WHERE mobile_id=$mobile_id");
    $r=mysqli_fetch_assoc($q);
    $brand_id                   =       $r["brand_id"];
    $mobile_name                =       $r["mobile_name"];
    $mobile_features            =       $r["mobile_features"];
    $mobile_network             =       $r["mobile_network"];
    $mobile_sim                 =       $r["mobile_sim"];
    $mobile_ram                 =       $r["mobile_ram"];
    $mobile_rom                 =       $r["mobile_rom"];
    $mobile_processor           =       $r["mobile_processor"];
    $mobile_chipset             =       $r["mobile_chipset"];
    $mobile_sensors             =       $r["mobile_sensors"];
    $mobile_battery             =       $r["mobile_battery"];
    $mobile_made                =       $r["mobile_made"];
    $body_weight                =       $r["body_weight"];
    $body_size                  =       $r["body_size"];
    $body_color                 =       $r["body_color"];
    $display_type               =       $r["display_type"];
    $display_size               =       $r["display_size"];
    $display_resolution         =       $r["display_resolution"];
    $display_protection         =       $r["display_protection"];
    $operating_os               =       $r["operating_os"];
    $camera_resolutionfront     =       $r["camera_resolutionfront"];
    $camera_featuresfront       =       $r["camera_featuresfront"];
    $camera_videofront          =       $r["camera_videofront"];
    $camera_resolutionback      =       $r["camera_resolutionback"];
    $camera_featuresback        =       $r["camera_featuresback"];
    $camera_videoback           =       $r["camera_videoback"];
    $connectivity_wlan          =       $r["connectivity_wlan"];
    $connectivity_bluetooth     =       $r["connectivity_bluetooth"];
    $connectivity_usb           =       $r["connectivity_usb"];
    $release_date               =       $r["release_date"];
    $connectivity_gps           =       $r["connectivity_gps"];
    $connectivity_otg           =       $r["connectivity_otg"];
    $mobile_details             =       $r["mobile_details"];
    $mobile_photo               =       $r["mobile_photo"];
    $mobile_price               =       $r["mobile_price"];
    $add_date                   =       $r["add_date"];
    $views                      =       $r["views"];
?>

<div>
    <div style="max-width: 100%; padding: 20px;">
        <img src="<?php echo $site_url; ?>/images/products/<?php echo $mobile_photo; ?>" alt="mobile Image" style="max-width: 200; height: 200px;">
    </div>
    <a href="#morephoto" class="btn btn-primary mb-5">View More Photos</a>
    <h5 class="text-white mb-3 p-2" style="background-color: black;"><?php echo $mobile_name; ?></h5>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;"><?php echo $mobile_name; ?> Full Specifications</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Name</td>
                    <td><?php echo $mobile_name; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Brand</td>
                    <td>
                        <?php echo get_info("mobile_brands","brand_name","WHERE brand_id=$brand_id");  ?>
                    </td>
                </tr>
                <tr>
                    <td style="width:20%">Color</td>
                    <td><?php echo $body_color; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Price</td>
                    <td>BDT. <?php echo $mobile_price; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Network</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Type</td>
                    <td><?php echo $mobile_network; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Sim</td>
                    <td><?php echo $mobile_sim; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Dimensions</td>
                    <td><?php echo $body_size; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Weight</td>
                    <td><?php echo $body_weight; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Display</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Type</td>
                    <td><?php echo $display_type; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Size</td>
                    <td><?php echo $display_size; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Resolution</td>
                    <td><?php echo $display_resolution; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Protection </td>
                    <td><?php echo $display_protection; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Memory</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">RAM</td>
                    <td><?php echo $mobile_ram; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">ROM</td>
                    <td><?php echo $mobile_rom; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Performance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Operating System</td>
                    <td><?php echo $operating_os; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Chipset</td>
                    <td><?php echo $mobile_chipset; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Processor</td>
                    <td><?php echo $mobile_processor; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Battery</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Type and Capacity</td>
                    <td><?php echo $mobile_battery; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Camera</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Front Resolution</td>
                    <td><?php echo $camera_resolutionfront; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Back Resolution</td>
                    <td><?php echo $camera_resolutionback; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Front Video</td>
                    <td><?php echo $camera_videofront; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Back Video</td>
                    <td><?php echo $camera_videoback; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Front Features</td>
                    <td><?php echo $camera_featuresfront; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Back Features</td>
                    <td><?php echo $camera_featuresback; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Connectivity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">WLAN</td>
                    <td><?php echo $connectivity_wlan; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Bluetooth</td>
                    <td><?php echo $connectivity_bluetooth; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">GPS</td>
                    <td><?php echo $connectivity_gps; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">USB</td>
                    <td><?php echo $connectivity_usb; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">OTG</td>
                    <td><?php echo $connectivity_otg; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Launch</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Release</td>
                    <td><?php echo $release_date; ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="background-color:#E2E2E2;">Others</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:20%">Features</td>
                    <td><?php echo $mobile_features; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Sensors</td>
                    <td><?php echo $mobile_sensors; ?></td>
                </tr>
                <tr>
                    <td style="width:20%">Made By</td>
                    <td><?php echo $mobile_made; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="morephoto"></div>
    <div class="photos">
        <h5 class="text-center mb-3 p-2" style="background-color: black; color: white;"><?php echo $mobile_name; ?>'s Images</h5>
        <?php

        $qp = mysqli_query($con, "SELECT * FROM mobile_photo WHERE mobile_id=$mobile_id AND status = 1");
        while ($rp = mysqli_fetch_assoc($qp)) { ?> 
            <img src="<?php echo $site_url; ?>/images/products/<?php echo $rp["photo_name"]; ?>" alt="<?php echo $rp["photo_name"]; ?>" class="img-fluid p-1" width="300px">
        <?php
        }
        ?>
    </div>

    <div>
        <h5 class="text-center mb-3 p-2" style="background-color: black; color: white;"><?php echo $mobile_name; ?> Details</h5>
        <p><?php echo $mobile_details; ?></p>
        <small>Views: <?php echo $views; ?></small><br>
        <small>Add date: <?php echo serverdate2bddate($add_date); ?></small>
    </div>
</div>


