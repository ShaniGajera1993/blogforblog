<?php

if(!isset($_SESSION)){
    session_start();
}

include("includes/db.php");

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    $admin_session = $_SESSION['admin_email'];

    $get_admin = "SELECT * from admin  where email='$admin_session'";

    $run_admin = mysqli_query($conn, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['id'];

    $admin_firstname = $row_admin['firstname'];

    $admin_lastname = $row_admin['lastname'];

    $admin_email = $row_admin['email'];

    $get_b_categories = "SELECT * FROM categories";
    $run_b_categories = mysqli_query($conn, $get_b_categories);
    $count_b_categories = mysqli_num_rows($run_b_categories);

    $get_user_count = "SELECT * FROM admin";
    $run_user_count = mysqli_query($conn, $get_user_count);
    $count_user = mysqli_num_rows($run_user_count);

    $get_blog_count = "SELECT * FROM blog";
    $run_blog_count = mysqli_query($conn, $get_blog_count);
    $count_blog = mysqli_num_rows($run_blog_count);    

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

                    if (isset($_GET['insert_blogs'])) {

                        include("insert_blogs.php");
                    }

                    if (isset($_GET['view_blogs'])) {

                        include("view_blogs.php");
                    }

                    if (isset($_GET['edit_blogs'])) {

                        include("edit_blogs.php");
                    }

                    if (isset($_GET['delete_blogs'])) {

                        include("delete_blogs.php");
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

                    if (isset($_GET['insert_user'])) {

                        include("insert_user.php");
                    }

                    if (isset($_GET['view_users'])) {

                        include("view_users.php");
                    }

                    if (isset($_GET['edit_users'])) {

                        include("edit_users.php");
                    }

                    if (isset($_GET['delete_users'])) {

                        include("delete_users.php");
                    }

                    if (isset($_GET['logout'])) {

                        include("logout.php");
                    }

                    ?>

                </div><!-- container-fluid Ends -->

            </div><!-- page-wrapper Ends -->

        </div><!-- wrapper Ends -->

        <?php include("includes/footer.php") ?>

    </body>


    </html>

<?php } ?>