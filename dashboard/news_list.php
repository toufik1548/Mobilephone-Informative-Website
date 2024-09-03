<div class="container">
    <h4 class="border col-2 text-center text-white bg-primary bg-opacity-75">News List</h4>

    <?php
    if (isset($_GET['news_id'])) {
        $news_id = $_GET['news_id'];
        $query = "UPDATE mobile_news SET status=0 WHERE news_id = $news_id";
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
                <th>News ID</th>
                <th>News Title</th>
                <th>Add Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM mobile_news";
            $qa = mysqli_query($con, $query);
            while ($ra = mysqli_fetch_assoc($qa)) {
                ?>
                <tr>
                    <td><?php echo $ra["news_id"]; ?></td>
                    <td><?php echo $ra["news_title"]; ?></td>
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
                    <td><?php echo $ra["add_date"]; ?></td>
                    <td>
                        <a href='index.php?target=news_list&news_id=<?php echo $ra["news_id"]; ?>' class='btn btn-danger btn-sm'>Delete</a> /
                        <a href='index.php?target=news_edit&news_id=<?php echo $ra["news_id"]; ?>' class='btn btn-primary btn-sm'>Update</a> /
                        <a href='index.php?target=news_photo&news_id=<?php echo $ra["news_id"]; ?>' class='btn btn-primary btn-sm'>Photo</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>