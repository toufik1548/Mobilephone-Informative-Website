
<div class="col-md-10">
    <h3 class="col-12 text-center pt-3">Price </h3>
    <div class="container">
        <div class="row">
            <?php 
                $price = explode("-", $slug2);

                $price_min = $price[0];
                $price_max = $price[1];

                $cond = " AND mobile_price BETWEEN $price_min AND $price_max";
                $order="ORDER BY mobile_price ASC";
                $limit="LIMIT 60";
                include("mobile_list.php");
            ?>
        </div>
    </div>
</div>