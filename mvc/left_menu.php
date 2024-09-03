
            <div>
                
                

                <div class="container-fluid p-0 mt-3 rounded d-md-block d-sm-block">
                   <table class="table table-hover" style="border: none;">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" style="border: none; background-color: black; color: white;">Phone Brands</th>
                            </tr>
                        </thead>

                    <?php 
                    
                    $cond = "";
                    $order="ORDER BY brand_id ASC";
                    $limit="LIMIT 10";

                    $q = mysqli_query($con, "SELECT * FROM mobile_brands WHERE status=1 $cond $order $limit");
                    while ($ra = mysqli_fetch_assoc($q)){ ?>

                        <tbody>
                            <tr>
                                <td class="text-center"><a href="<?php echo $site_url; ?>/brand/<?php echo $ra["brand_slug"]; ?>/" style="text-decoration: none;"><?php echo $ra["brand_name"]; ?> <small>[<?php echo get_total("mobile_specs","brand_id","WHERE brand_id=".$ra["brand_id"]); ?>]</small></a></td>
                            </tr>

                    <?php
                    }
                    ?>

                        <tr>
                            <td class="text-center" style="border: none; background-color: #D0D0D0"><a href="<?php echo $site_url; ?>/brands/" class="btn btn-primary" style="width: 100%; text-decoration: none; padding: 5%;"><b>All Brands</b></a></td>
                        </tr>
                        </tbody>
                        
                    </table>
                </div>


                <div class="container-fluid p-0 mt-3 rounded d-md-block d-sm-block">
                   <table class="table table-hover" style="border: none;">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" style="border: none; background-color: black; color: white;">Price Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/1-5000/" style="text-decoration: none;">Tk 1 - Tk 5,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/5000-10000/" style="text-decoration: none;">Tk 5,000 - Tk 10,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/10000-20000/" style="text-decoration: none;">Tk 10,000 - Tk 15,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/20000-30000/" style="text-decoration: none;">Tk 15,000 - Tk 20,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/30000-40000/" style="text-decoration: none;">Tk 20,000 - Tk 25,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/40000-50000/" style="text-decoration: none;">Tk 25,000 - Tk 30,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/50000-100000/" style="text-decoration: none;">Tk 30,000 - Tk 40,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/40000-50000/" style="text-decoration: none;">Tk 40,000 - Tk 50,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/50000-100000/" style="text-decoration: none;">Tk 50,000 - Tk 100,000</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $site_url; ?>/price-range/100000-300000/" style="text-decoration: none;">Tk 1,00,000 - Tk 3,00,000</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="container-fluid p-0 mt-3 rounded d-md-block d-sm-block">
                   <table class="table table-hover" style="border: none;">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" style="border: none; background-color: black; color: white;">Top 10 mobiles</th>
                            </tr>
                        </thead>

                    <?php 
                    $q = mysqli_query($con, "SELECT * FROM mobile_specs WHERE status = 1 ORDER BY mobile_price DESC LIMIT 10");
                    $count = 1;
                    while ($ra = mysqli_fetch_assoc($q)){ ?>
                        <tbody>
                            <tr>
                                <td style="color: #0B5ED7;"><?php echo $count . ". "; ?><a href="<?php echo $site_url; ?>/product/<?php echo $ra["mobile_slug"]; ?>/" title="<?php echo $ra["mobile_name"]; ?>" style="text-decoration: none;"><?php echo $ra["mobile_name"]; ?></a></td>
                            </tr>
                        </tbody>
                    <?php
                    $count++;
                    }
                    ?>

                        </tbody>
                    </table>
                </div>

            </div>




