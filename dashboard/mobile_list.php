
    <?php
    $total_phones = get_total("mobile_specs","mobile_slug","WHERE status=1");
    $total_brands = get_total("mobile_brands","brand_slug","WHERE status=1");
    if (isset($_GET['mobile_slug'])) {
        $mobile_slug = $_GET['mobile_slug'];
        $query = "UPDATE mobile_specs SET status=0 WHERE mobile_slug = $mobile_slug";
        $data = mysqli_query($con, $query);

        if ($data) {
            echo "<div class='alert alert-success'>Record Removed</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to remove</div>";
        }
    }

    ?>







<div class="container">
    <h3 class="border col-2 text-center text-white bg-primary bg-opacity-75">Mobile List</h3>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Mobile ID</th>
                <th>Brand Name <?php echo $total_brands; ?></th>
                <th>Mobile Name <?php echo $total_phones; ?></th>
                <th>Status</th>
                <th>Add Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM mobile_specs ORDER BY mobile_slug ASC";
            $qs = mysqli_query($con, $query);
            while ($rs = mysqli_fetch_assoc($qs)) {
                ?>
                <tr>
                    <td><?php echo $rs["mobile_slug"]; ?></td>
                    <td>
                    <?php 
                    $brand_id= $rs["brand_id"];

                    $qb = mysqli_query($con, "SELECT brand_name FROM mobile_brands WHERE brand_id=$brand_id");
                    $rb = mysqli_fetch_assoc($qb);

                    echo $rb["brand_name"];

                     ?>
                         
                     </td>
                    <td><?php echo $rs["mobile_name"]; ?></td>
                    <td>
                        <?php
                        $s = $rs["status"];
                        if ($s == 0) {
                            echo "<span class='text-danger'>Inactive</span>";
                        } else {
                            echo "<span class='text-primary'>Active</span>";
                        }
                        ?>
                    </td>
                    <td><?php echo $rs["add_date"]; ?></td>
                    <td>
                        <a href='index.php?target=mobile_list&mobile_slug=<?php echo $rs["mobile_slug"]; ?>' class='btn btn-danger btn-sm'>Delete</a> /
                        <a href='index.php?target=mobile_edit&mobile_slug=<?php echo $rs["mobile_slug"]; ?>' class='btn btn-primary btn-sm'>Update</a> /
                        <a href='index.php?target=mobile_photo&mobile_slug=<?php echo $rs["mobile_slug"]; ?>' class='btn btn-primary btn-sm'>Photo</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>