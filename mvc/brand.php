
    <div>
      <div class="container">
        <div class="row">
          <?php 
    


    //counting total records
         // $qn = mysqli_query($con,"SELECT brand_id FROM mobile_specs WHERE status=1 AND brand_id=$brand_id");
          //$nn = mysqli_num_rows($qn);
          //echo $nn;


          $total_phones = get_total("mobile_specs","brand_id","WHERE brand_id=$brand_id");          

          $cond = " AND brand_id=$brand_id";
          $order="ORDER BY mobile_id DESC";
          $limit="";

          $brand_name= get_info("mobile_brands","brand_name","WHERE brand_id=$brand_id");
          echo "<h3 class='text-center pt-3'>" . htmlspecialchars($brand_name) . "</h3>";
          echo "<h6 class='text-center pb-3'>Available $total_phones Phones</h6>";



          include("mobile_list.php");
          ?>
        </div>
      </div>
    </div>

