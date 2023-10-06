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

                    if(isset($_GET['category'])){
                        $blogcategory = $_GET['category'];

                        $view_blog = "SELECT * FROM blog WHERE category = '$blogcategory'";
                        $run_view_blog = mysqli_query($conn, $view_blog);

                        if (mysqli_num_rows($run_view_blog) == 0) {
                            echo '<h6>There is no blog for this category</h6>';
                        }

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
                                    <img src="admin/images/'. $blog_image . '" class="card-img-top img-fluid img-responsive" style="width:406px;height:250px" alt="...">
                                    <div class="card mt-3" style="border:none; color:black;">
                                        <h6 class="card-title">' . $blog_title . '</h6>
                                    </div>
                                </div>
                                </a>
                            </div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php include("includes/category.php"); ?>
                    <div class="col">
                        <h5><strong>Recent Post</strong></h5><br>

                        <?php 
                        
                        $old_blog = "SELECT * from blog ORDER BY date DESC LIMIT 8";
                        $run_old_blog = mysqli_query($conn, $old_blog);

                        while ($row_blog = mysqli_fetch_array($run_old_blog)) {
                            $blog_id = $row_blog['id'];
                            $blog_author = $row_blog['author'];
                            $blog_title = $row_blog['title'];
                            $blog_category = $row_blog['category'];
                            $blog_image = $row_blog['image'];
                            $blog_tag = $row_blog['tag'];
                            $blog_date = $row_blog['date'];

                            echo '<div style="border:none;" class="card mb-3" style="max-width: 540px;">
                                    <a href="blog.php?blog_id=' . $blog_id . '">
                                        <div class="row g-0">
                                            <div style="padding-bottom: 10px;" class="col-md-4">
                                                <img src="admin/images/'. $blog_image . '" class="img-fluid rounded-start img-responsive" style="width: 116px; height: 64px; padding-left: 10px;" alt="...">
                                            </div>
                                            <div style="padding-left: 10px; padding-right:10px;" class="col-md-8">
                                                <h6 style="color:black;" class="card-title">' . $blog_title . '</h6>
                                                <p class="card-text"><small class="text-muted">' . $blog_date . '</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>';
                        }    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>

</html>