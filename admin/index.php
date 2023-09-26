<?php
include("includes/db.php");

$get_b_categories = "SELECT * FROM categories";
$run_b_categories = mysqli_query($conn, $get_b_categories);
$count_b_categories = mysqli_num_rows($run_b_categories);

?>
<!DOCTYPE html>
<html>
<?php include("includes/header.php") ?>

<body>
    <div id="wrapper"><!-- wrapper Starts -->

        <?php include("includes/sidebar.php"); ?>

        <div id="page-wrapper"><!-- page-wrapper Starts -->

            <div class="container-fluid"><!-- container-fluid Starts -->

                <?php

                if (isset($_GET['dashboard'])) {

                    include("dashboard.php");

                }

                if (isset($_GET['insert_categories'])) {

                    include("insert_categories.php");
                }

                if (isset($_GET['view_categories'])) {

                    include("view_categories.php");
                }

                if (isset($_GET["edit_categories"])) {

                    include('edit_categories.php');
                }

                if (isset($_GET["delete_categories"])) {

                    include('delete_categories.php');
                }
                ?>

            </div><!-- container-fluid Ends -->

        </div><!-- page-wrapper Ends -->

    </div><!-- wrapper Ends -->

    <?php include("includes/footer.php") ?>

</body>


</html>