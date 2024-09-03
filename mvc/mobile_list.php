

    <?php
    $q = mysqli_query($con, "SELECT * FROM mobile_specs WHERE status = 1 $cond $order $limit");
    while ($ra = mysqli_fetch_assoc($q)) { ?>
      <div class="col-6 col-sm-6 col-md-4 col-lg-2">
          <div class="product-thumb p-2 text-center bg-white rounded" style="width: 100%; margin: 10px 0px;">
            <a href="<?php echo $site_url; ?>/product/<?php echo $ra["mobile_slug"]; ?>/" title="<?php echo $ra["mobile_name"]; ?>" style="text-decoration: none;">
              <img src="<?php echo $site_url; ?>/images/products/<?php echo $ra["mobile_photo"]; ?>" alt="<?php echo $ra["mobile_name"]; ?>" class="img-fluid">
              <div class="mobile-name" style="height: 45px"><?php echo $ra["mobile_name"]; ?></div>
            </a>
            <div class="mobile-price p-2">BDT. <?php echo $ra["mobile_price"]; ?></div>
            <a href="<?php echo $site_url; ?>/product/<?php echo $ra["mobile_slug"]; ?>/" title="<?php echo $ra["mobile_name"]; ?>" class="btn btn-primary view-details-btn">Details</a>
          </div>
      </div>
    <?php
    }
    ?>


