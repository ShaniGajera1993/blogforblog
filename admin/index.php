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

                ?>

            </div><!-- container-fluid Ends -->

        </div><!-- page-wrapper Ends -->

    </div><!-- wrapper Ends -->

    <?php include("includes/footer.php") ?>

</body>


</html>