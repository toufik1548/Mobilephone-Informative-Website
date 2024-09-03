


<?php

//mobile1
    $q = mysqli_query($con,"SELECT * FROM mobile_specs WHERE mobile_id=$mobile_id1");
    $r=mysqli_fetch_assoc($q);

    $brand_id1                   =       $r["brand_id"];
    $mobile_name1                =       $r["mobile_name"];
    $mobile_features1            =       $r["mobile_features"];
    $mobile_network1             =       $r["mobile_network"];
    $mobile_sim1                 =       $r["mobile_sim"];
    $mobile_ram1                 =       $r["mobile_ram"];
    $mobile_rom1                 =       $r["mobile_rom"];
    $mobile_processor1           =       $r["mobile_processor"];
    $mobile_chipset1             =       $r["mobile_chipset"];
    $mobile_sensors1             =       $r["mobile_sensors"];
    $mobile_battery1             =       $r["mobile_battery"];
    $mobile_made1                =       $r["mobile_made"];
    $body_weight1                =       $r["body_weight"];
    $body_size1                  =       $r["body_size"];
    $body_color1                 =       $r["body_color"];
    $display_type1               =       $r["display_type"];
    $display_size1               =       $r["display_size"];
    $display_resolution1         =       $r["display_resolution"];
    $display_protection1         =       $r["display_protection"];
    $operating_os1               =       $r["operating_os"];
    $camera_resolutionfront1     =       $r["camera_resolutionfront"];
    $camera_featuresfront1       =       $r["camera_featuresfront"];
    $camera_videofront1          =       $r["camera_videofront"];
    $camera_resolutionback1      =       $r["camera_resolutionback"];
    $camera_featuresback1        =       $r["camera_featuresback"];
    $camera_videoback1           =       $r["camera_videoback"];
    $connectivity_wlan1          =       $r["connectivity_wlan"];
    $connectivity_bluetooth1     =       $r["connectivity_bluetooth"];
    $connectivity_usb1           =       $r["connectivity_usb"];
    $release_date1               =       $r["release_date"];
    $connectivity_gps1           =       $r["connectivity_gps"];
    $connectivity_otg1           =       $r["connectivity_otg"];
    $mobile_details1             =       $r["mobile_details"];
    $mobile_photo1               =       $r["mobile_photo"];
    $mobile_price1               =       $r["mobile_price"];
    $add_date1                   =       $r["add_date"];




//mobile2
    $q = mysqli_query($con,"SELECT * FROM mobile_specs WHERE mobile_id=$mobile_id2");
    $r=mysqli_fetch_assoc($q);

    $brand_id2                   =       $r["brand_id"];
    $mobile_name2                =       $r["mobile_name"];
    $mobile_features2            =       $r["mobile_features"];
    $mobile_network2             =       $r["mobile_network"];
    $mobile_sim2                 =       $r["mobile_sim"];
    $mobile_ram2                 =       $r["mobile_ram"];
    $mobile_rom2                 =       $r["mobile_rom"];
    $mobile_processor2           =       $r["mobile_processor"];
    $mobile_chipset2             =       $r["mobile_chipset"];
    $mobile_sensors2             =       $r["mobile_sensors"];
    $mobile_battery2             =       $r["mobile_battery"];
    $mobile_made2                =       $r["mobile_made"];
    $body_weight2                =       $r["body_weight"];
    $body_size2                  =       $r["body_size"];
    $body_color2                 =       $r["body_color"];
    $display_type2               =       $r["display_type"];
    $display_size2               =       $r["display_size"];
    $display_resolution2         =       $r["display_resolution"];
    $display_protection2         =       $r["display_protection"];
    $operating_os2               =       $r["operating_os"];
    $camera_resolutionfront2     =       $r["camera_resolutionfront"];
    $camera_featuresfront2       =       $r["camera_featuresfront"];
    $camera_videofront2          =       $r["camera_videofront"];
    $camera_resolutionback2      =       $r["camera_resolutionback"];
    $camera_featuresback2        =       $r["camera_featuresback"];
    $camera_videoback2           =       $r["camera_videoback"];
    $connectivity_wlan2          =       $r["connectivity_wlan"];
    $connectivity_bluetooth2     =       $r["connectivity_bluetooth"];
    $connectivity_usb2           =       $r["connectivity_usb"];
    $release_date2               =       $r["release_date"];
    $connectivity_gps2           =       $r["connectivity_gps"];
    $connectivity_otg2           =       $r["connectivity_otg"];
    $mobile_details2             =       $r["mobile_details"];
    $mobile_photo2               =       $r["mobile_photo"];
    $mobile_price2               =       $r["mobile_price"];
    $add_date2                   =       $r["add_date"];
?>








<h5 class="text-center"><?php echo $mobile_name1; ?> Vs <?php echo $mobile_name1; ?></h5>


<table class="table table-hover mt-3">

<tbody class="text-center">
    <tr>
      <td style="background-color: black; color: white;"><?php echo $mobile_name1; ?></td>
      <td class="bg-secondary">Compare</td>
      <td style="background-color: black; color: white;"><?php echo $mobile_name2; ?></td>
    </tr>
    <tr>
      <td><img src="<?php echo $site_url; ?>/images/products/<?php echo $mobile_photo1; ?>" alt="mobile Image" style="max-width: 100%; height: 100%;"></td>
      <td class="bg-secondary">Image</td>
      <td><img src="<?php echo $site_url; ?>/images/products/<?php echo $mobile_photo2; ?>" alt="mobile Image" style="max-width: 100%; height: 100%;"></td>
    </tr>
    <tr>
      <td><?php echo $mobile_name1; ?></td>
      <td class="bg-secondary">Name</td>
      <td><?php echo $mobile_name2; ?></td>
    </tr>
    <tr>
      <td><?php echo get_info("mobile_brands","brand_name","WHERE brand_id=$brand_id1");  ?></td>
      <td class="bg-secondary">Brand</td>
      <td><?php echo get_info("mobile_brands","brand_name","WHERE brand_id=$brand_id2");  ?></td>
    </tr>
    <tr>
      <td><?php echo $body_color1; ?></td>
      <td class="bg-secondary">Color</td>
      <td><?php echo $body_color2; ?></td>
    </tr>
    <tr>
      <td>BDT. <?php echo $mobile_price1; ?></td>
      <td class="bg-secondary">Price</td>
      <td>BDT. <?php echo $mobile_price2; ?></td>
    </tr>
    <tr>
      <td><?php echo $body_size1; ?></td>
      <td class="bg-secondary">Body Dimensions</td>
      <td><?php echo $body_size2; ?></td>
    </tr>
    <tr>
      <td><?php echo $body_weight1; ?></td>
      <td class="bg-secondary">Body Weight</td>
      <td><?php echo $body_weight2; ?></td>
    </tr>
    <tr>
      <td><?php echo $display_type1; ?></td>
      <td class="bg-secondary">Display Type</td>
      <td><?php echo $display_type2; ?></td>
    </tr>
    <tr>
      <td><?php echo $display_size1; ?></td>
      <td class="bg-secondary">Display Size</td>
      <td><?php echo $display_size2; ?></td>
    </tr>
    <tr>
      <td><?php echo $display_resolution1; ?></td>
      <td class="bg-secondary">Display Resolution</td>
      <td><?php echo $display_resolution2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_ram1; ?></td>
      <td class="bg-secondary">RAM</td>
      <td><?php echo $mobile_ram2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_rom1; ?></td>
      <td class="bg-secondary">ROM</td>
      <td><?php echo $mobile_rom2; ?></td>
    </tr>
    <tr>
      <td><?php echo $operating_os1; ?></td>
      <td class="bg-secondary">Operating System</td>
      <td><?php echo $operating_os2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_chipset1; ?></td>
      <td class="bg-secondary">Chipset</td>
      <td><?php echo $mobile_chipset2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_processor1; ?></td>
      <td class="bg-secondary">Processor</td>
      <td><?php echo $mobile_processor2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_battery1; ?></td>
      <td class="bg-secondary">Battery</td>
      <td><?php echo $mobile_battery2; ?></td>
    </tr>
    <tr>
      <td><?php echo $camera_resolutionfront1; ?></td>
      <td class="bg-secondary">Camera Front Resolution</td>
      <td><?php echo $camera_resolutionfront2; ?></td>
    </tr>
    <tr>
      <td><?php echo $camera_resolutionback1; ?></td>
      <td class="bg-secondary">Camera Back Resolution</td>
      <td><?php echo $camera_resolutionback2; ?></td>
    </tr>
    <tr>
      <td><?php echo $camera_videofront1; ?></td>
      <td class="bg-secondary">Camera Front Video</td>
      <td><?php echo $camera_videofront2; ?></td>
    </tr>
    <tr>
      <td><?php echo $camera_videoback1; ?></td>
      <td class="bg-secondary">Camera Back Video</td>
      <td><?php echo $camera_videoback2; ?></td>
    </tr>
    <tr>
      <td><?php echo $camera_featuresfront1; ?></td>
      <td class="bg-secondary">Camera Front Features</td>
      <td><?php echo $camera_featuresfront2; ?></td>
    </tr>
    <tr>
      <td><?php echo $camera_featuresback1; ?></td>
      <td class="bg-secondary">Camera Back Features</td>
      <td><?php echo $camera_featuresback2; ?></td>
    </tr>
    <tr>
      <td><?php echo $connectivity_usb1; ?></td>
      <td class="bg-secondary">USB</td>
      <td><?php echo $connectivity_usb2; ?></td>
    </tr>
    <tr>
      <td><?php echo $release_date1; ?></td>
      <td class="bg-secondary">Launch</td>
      <td><?php echo $release_date2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_sensors1; ?></td>
      <td class="bg-secondary">Sensors</td>
      <td><?php echo $mobile_sensors2; ?></td>
    </tr>
    <tr>
      <td><?php echo $mobile_made1; ?></td>
      <td class="bg-secondary">Made By</td>
      <td><?php echo $mobile_made2; ?></td>
    </tr>
</tbody>

</table>

