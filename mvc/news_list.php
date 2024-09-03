
<div>

      <h3 class="col-12 text-center pt-5">Latest Mobile News</h3>
      
      <?php
      $total_news = get_total("mobile_news","news_id","WHERE status=1");

        $cond = "";
        $order="ORDER BY news_id DESC";
        $limit="LIMIT 2";
      ?>

      <h6 class="col-12 text-center pb-2">Available <?php echo $total_news; ?> Newses</h6>

      <?php
      $q = mysqli_query($con, "SELECT * FROM mobile_news WHERE status = 1 $cond $order $limit");
      while ($ra = mysqli_fetch_assoc($q)) { ?>

        <div class="p-3">
          <div class="container border rounded" style="background-color: white;">
            <a href="<?php echo $site_url; ?>/news/<?php echo $ra["news_slug"]; ?>/">
              <img src="<?php echo $site_url; ?>/images/news/<?php echo $ra["news_photo"]; ?>" class="pt-2" style="width: 100px; height: 100px;" alt="...">
            </a>
            <h5 class=""><a href="<?php echo $site_url; ?>/news/<?php echo $ra["news_slug"]; ?>/" style="text-decoration: none;"><?php echo $ra["news_title"]; ?></a></h5>
            <p class="pt-1"><?php echo substr($ra["news_details"],0,300); ?> ...<a href="<?php echo $site_url; ?>/news/<?php echo $ra["news_slug"]; ?>/" class="btn btn-primary mobile-btn p-0">Show more</a></p>
            <small>Last updated on: <?php echo $ra["add_date"]; ?></small>
          </div>
        </div>

      <?php
      }
      ?>

</div>