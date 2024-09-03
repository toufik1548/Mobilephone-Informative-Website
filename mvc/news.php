
<div class="container-fluid pt-3">
    <div class="row m-2">
        <?php //include("welcome_left.php"); ?>

        <?php


        // update views
        mysqli_query($con,"UPDATE mobile_news SET views=views+1 WHERE news_slug='$news_slug'");

        $q = mysqli_query($con,"SELECT * FROM mobile_news WHERE news_slug='$news_slug'");
        $r=mysqli_fetch_assoc($q);

        $news_title               =       $r["news_title"];
        $news_details             =       $r["news_details"];
        $news_photo               =       $r["news_photo"];
        $add_date                 =       $r["add_date"];
        $views                    =       $r["views"];

        ?>

        <div class="col-md-10">
            <div style="max-width: 100%; padding: 20px;">
                <img src="<?php echo $site_url; ?>/images/news/<?php echo $news_photo; ?>" alt="news Image" style="max-width: 200; height: 200px;">
        </div>
        <h5 class="text-center mb-3 p-2" style="background-color: black; color: white;"><?php echo $news_title; ?> Details</h5>
        <div>
            <p><?php echo $news_details; ?></p>
            <small>Views: <?php echo $views; ?></small><br>
            <small>Add date: <?php echo serverdate2bddate($add_date); ?></small>
        </div>

        </div>
    </div>
</div>

