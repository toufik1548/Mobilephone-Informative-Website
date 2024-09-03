

<div>
  <h3 class="col-12 text-center pt-3">MOBILE PHONES</h3>

  <?php $total_phones = get_total("mobile_specs","mobile_id","WHERE status=1"); ?>

  <h6 class="col-12 text-center pb-3">Available <?php echo $total_phones; ?> Phones</h6>

  <div class="container">            
    <div class="row">
    <?php 
      $cond = "";
      $order="ORDER BY mobile_id DESC";
      $limit="LIMIT 24";
      include("mobile_list.php"); 
    ?>
    </div>
  </div>
</div>

<?php include("news_list.php");  ?>