<?php 
include("configs/config.php");
?>

<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT mobile_name, mobile_slug, mobile_photo FROM mobile_specs WHERE mobile_name LIKE '%{$input}%'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        ?>
        <ul class="list-group mt-4">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $mobile_name = $row['mobile_name'];
                $mobile_slug = $row['mobile_slug'];
                ?>
                <li class="list-group-item suggestion-item" data-name="<?php echo $mobile_name; ?>" style="background-color: white;">
                    <a href="<?php echo $site_url; ?>/product/<?php echo $mobile_slug; ?>/" style="text-decoration: none; color: black;">
                        <?php echo $mobile_name; ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
        <?php
    } else {
        echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }
}
?>

<style type="text/css">
    .list-group {
        position: absolute;
        z-index: 1000; /* Adjust the z-index value as needed */
        width: 50%; 
        background-color: #fff; /* Set a background color if needed */
        border: 1px solid #ccc; /* Add a border for better visibility */
    }

    .suggestion-item {
        cursor: pointer;
        padding: 8px; /* Add padding for better appearance */
    }

    .suggestion-item:hover {
        background-color: #f5f5f5; /* Add a background color on hover */
    }

    /* Add margin to the content below to prevent overlap */
    .content-below {
        margin-top: 10px; /* Adjust the margin-top value based on your design */
    }
</style>
 