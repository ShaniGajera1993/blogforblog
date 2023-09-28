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
            <div class="col-sm-8 p-4">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <?php

                    include("admin/includes/db.php");
                    $view_blog = "SELECT * from blog";
                    $run_view_blog = mysqli_query($conn, $view_blog);

                    while ($row_blog = mysqli_fetch_array($run_view_blog)) {
                        $blog_id = $row_blog['id'];
                        $blog_author = $row_blog['author'];
                        $blog_title = $row_blog['title'];
                        $blog_category = $row_blog['category'];
                        $blog_image = $row_blog['image'];
                        $blog_tag = $row_blog['tag'];
                        $blog_date = $row_blog['date'];

                        echo '<div class="col">
                                <div class="card h-100">
                                    <img src="admin/images/'. $blog_image . '" class="card-img-top" style="width:406px;height:250px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $blog_title . '</h5>
                                    </div>
                                    <div class="card-footer">
                                    <div class="row">
                                        <div class="col"><small class="text-muted"><i class="fa fa-user"></i> ' . $blog_author . '</small></div>
                                        <div style="text-align: right;" class="col"><small class="text-muted"><i class="fa fa-clock-o"></i> ' . $blog_date . '</small></div>
                                    </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <?php include("includes/category.php"); ?>
                    <div class="col">
                        <h5><strong>Older Post</strong></h5><br>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>

</html>