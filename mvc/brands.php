
		<div>
            <h3 class="col-12 text-center pt-3">BRANDS</h3>
            <?php
  			$total_brands = get_total("mobile_brands","brand_slug","WHERE status=1");
  			?>
  			<h6 class="col-12 text-center pb-3">Available <?php echo $total_brands; ?> Brands</h6> 
            <div class="container">
                <div class="row">
					
					<?php
					$q = mysqli_query($con,"SELECT * FROM mobile_brands WHERE status=1");
					while($ra=mysqli_fetch_assoc($q)){ ?>

					<div class="col-6 col-md-4 col-lg-2">	
  						<div class="p-1">
							<a href="<?php echo $site_url; ?>/brand/<?php echo $ra["brand_slug"]; ?>/">
							<img src="<?php echo $site_url; ?>/images/brands/<?php echo $ra["brand_logo"]; ?>" style="width: 100%; height: 80%;"><br>
							</a><br>
						</div>
					</div>

					<?php 
					}
					?>

				</div>
			</div>
		</div>