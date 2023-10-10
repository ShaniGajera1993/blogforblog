<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php include("includes/header.php") ?>
    <div class="container blog-css">
        <div class="row">
            <div class="col-md-8 p-4">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <?php

                    include("admin/includes/db.php");

                    if (isset($_POST['submit'])) {

                        $search = $_POST['search'];

                        // Use % around the search term for a partial match
                        $search = '%' . $search . '%';

                        $view_blog = "SELECT * FROM blog WHERE title LIKE ?";
                        $stmt = mysqli_prepare($conn, $view_blog);

                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "s", $search);
                            mysqli_stmt_execute($stmt);
                            $run_view_blog = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($run_view_blog) == 0) {
                                echo '<h6>No Result for "' . $_POST['search'] . '"</h6>';
                            } else {
                                while ($row_blog = mysqli_fetch_array($run_view_blog)) {
                                    $blog_id = $row_blog['id'];
                                    $blog_author = $row_blog['author'];
                                    $blog_title = $row_blog['title'];
                                    $blog_category = $row_blog['category'];
                                    $blog_image = $row_blog['image'];
                                    $blog_tag = $row_blog['tag'];
                                    $blog_date = $row_blog['date'];

                                    echo '<div class="col">
                                    <a href="blog.php?blog_id=' . $blog_id . '">
                                    <div class="card" style="border:none;">
                                        <img src="admin/images/' . $blog_image . '" class="card-img-top img-fluid img-responsive" style="width:406px;height:250px" alt="...">
                                        <div class="card mt-3" style="border:none; color:black;">
                                            <h6 class="card-title">' . $blog_title . '</h6>
                                        </div>
                                    </div>
                                    </a>
                                </div>';
                                }
                            }
                        } else {
                            echo 'Error in preparing the SQL statement: ' . mysqli_error($conn);
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php include("includes/category.php"); ?>
                    <?php include("includes/recentpost.php"); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>

</html>