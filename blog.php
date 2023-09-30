<?php 

include('admin/includes/db.php');

if(isset($_GET['blog_id'])){
    
    $blog_id = $_GET['blog_id'];

    $get_blog = "SELECT * FROM blog WHERE id = '$blog_id'";

    $run_get_blog = mysqli_query($conn, $get_blog);

    $row_blog = mysqli_fetch_array($run_get_blog);
    
    $blogid = $row_blog['id'];
    $blog_author = $row_blog['author'];
    $blog_title = $row_blog['title'];
    $blog_image = $row_blog['image'];
    $blog_category = $row_blog['category'];
    $blog_tag = $row_blog['tag'];
    $blog_content = $row_blog['content'];
    $blog_date = $row_blog['date'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <?php include("includes/header.php") ?>

    <div class="container blog-css">
        <div class="row">
            <div class="col-sm-8 p-4">
                <div class="blog-grid-top">
                    <div class="blog_info_left_grid">
								<img src="admin/images/<?php echo $blog_image;?>" class="img-fluid" alt="image not available" style="width:900px;height:300px">
					</div>
                    <div class="row">
                        <div style="text-align: left;" class="col">
                            <i class="fa fa-user"></i> <?php echo $blog_author;?>
                        </div>
                        <div style="text-align: center;" class="col">
                            <i class="fa fa-list-alt"></i> <?php echo $blog_category;?>
                        </div>
                        <div style="text-align: center;" class="col">
                            <i class="fa fa-tag"></i> <?php echo $blog_tag;?>
                        </div>
                        <div style="text-align: right;" class="col">
                            <i class="fa fa-calendar"></i> <?php echo $blog_date;?>
                        </div>
                    </div>
                    <br><h3><?php echo $blog_title;?></h3>
                    <br><p><?php echo $blog_content;?></p>  
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