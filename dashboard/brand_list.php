<div class="container">
    <h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">Brand List</h4>

    <?php
    if (isset($_GET['brand_id'])) {
        $brand_id = $_GET['brand_id'];
        $query = "UPDATE mobile_brands SET status=0 WHERE brand_id = $brand_id";
        $data = mysqli_query($con, $query);

        if ($data) {
            echo "<div class='alert alert-success'>Record Removed</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to remove</div>";
        }
    }
    ?>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Brand ID</th>
                <th>Brand Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM mobile_brands";
            $qa = mysqli_query($con, $query);
            while ($ra = mysqli_fetch_assoc($qa)) {
                ?>
                <tr>
                    <td><?php echo $ra["brand_id"]; ?></td>
                    <td><?php echo $ra["brand_name"]; ?></td>
                    <td>
                        <?php
                        $re = $ra["status"];
                        if ($re == 0) {
                            echo "<span class='text-danger'>Inactive</span>";
                        } else {
                            echo "<span class='text-primary'>Active</span>";
                        }
                        ?>
                    </td>
                    <td>
                        <a href='index.php?target=brand_list&brand_id=<?php echo $ra["brand_id"]; ?>' class='btn btn-danger btn-sm'>Delete</a> /
                        <a href='index.php?target=brand_edit&brand_id=<?php echo $ra["brand_id"]; ?>' class='btn btn-primary btn-sm'>Update</a> /
                        <a href='index.php?target=brand_photo&brand_id=<?php echo $ra["brand_id"]; ?>' class='btn btn-primary btn-sm'>Photo</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>