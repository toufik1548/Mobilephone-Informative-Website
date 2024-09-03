

<div class="">
    <div class="container d-flex text-center">

        <?php
        // Fetching only one mobile for demonstration purposes. Modify this as per your requirements.
        $q = mysqli_query($con, "SELECT * FROM mobile_specs WHERE status = 1 LIMIT 1");
        $ra = mysqli_fetch_assoc($q);
        ?>

        <div class="container p-3">
            <div>
                <img src="<?php echo $site_url; ?>/images/products/<?php echo $ra["mobile_photo"]; ?>" alt="<?php echo $ra["mobile_name"]; ?>" class="img-fluid" id="mobileImage1"><br>

                <form>
                    <label for="mobile_id">Choose a Mobile:</label>
                    <select name="mobile_id" id="mobileSelect1">
                    	<option value="0">Select a Mobile:</option>
                        <?php
                        $qb = mysqli_query($con, "SELECT mobile_id, mobile_name, mobile_photo, mobile_slug FROM mobile_specs ORDER BY mobile_name ASC");
                        while ($rb = mysqli_fetch_assoc($qb)) { ?>

                            <option value="<?php echo $rb["mobile_id"]; ?>" data-image="<?php echo $site_url; ?>/images/products/<?php echo $rb['mobile_photo']; ?>" data-slug="<?php echo $rb['mobile_slug']; ?>">
                                <?php echo $rb["mobile_name"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </form>


            </div>
        </div>

        <div class="container p-3">
            <div>
                <img src="<?php echo $site_url; ?>/images/products/<?php echo $ra["mobile_photo"]; ?>" alt="<?php echo $ra["mobile_name"]; ?>" class="img-fluid" id="mobileImage2"><br>
                <form>
                    <label for="mobile_id">Choose a Mobile:</label>
                    <select name="mobile_id" id="mobileSelect2">
						<option value="0">Select a Mobile:</option>
                        <?php
                        // Resetting the query pointer before fetching again
                        mysqli_data_seek($qb, 0);
                        while ($rb = mysqli_fetch_assoc($qb)) { ?>

                            <option value="<?php echo $rb["mobile_id"]; ?>" data-image="<?php echo $site_url; ?>/images/products/<?php echo $rb["mobile_photo"]; ?>" data-slug="<?php echo $rb['mobile_slug']; ?>">
                                <?php echo $rb["mobile_name"]; ?>
                            </option>

                        <?php } ?>
                    </select>
                </form>
            </div>
        </div>
    </div>


    <div class="text-center">
        <a href="<?php echo $site_url; ?>/compare-mobile/" id="compareLink" title="compare" class="btn btn-primary view-details-btn">Compare</a>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Change event for the first dropdown
        $("#mobileSelect1").change(function() {
            updateMobileImageAndSlug($(this), $("#mobileImage1"), $("#mobileSelect2"));
        });

        // Change event for the second dropdown
        $("#mobileSelect2").change(function() {
            updateMobileImageAndSlug($(this), $("#mobileImage2"), $("#mobileSelect1"));
        });

        function updateMobileImageAndSlug(selectElement, imageElement, otherSelectElement) {
            var selectedImage = selectElement.find(':selected').data('image');
            var selectedSlug = selectElement.find(':selected').data('slug');

            imageElement.attr('src', selectedImage);

            // Get the slug of the other selected mobile
            var otherSelectedSlug = otherSelectElement.find(':selected').data('slug');

            // Construct the URL for comparison using both slugs
            var compareUrl = "<?php echo $site_url; ?>/compare-mobile/" + otherSelectedSlug + "-vs-" + selectedSlug + "/";
            $("#compareLink").attr('href', compareUrl);
        }
    });
</script>





