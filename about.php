<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <?php include("includes/header.php") ?>

    <div class="container text-center blog-css">
        <h2><strong>About</strong></h2><br>
    </div>
    <div class="container blog-css">
        <div class="row">
            <div style="text-align: justify; text-justify: inter-word; color:black;" class="col-md-8 p-4">
                <div class="blog-grid-top">

                    <div class="blog_info_left_grid">
                        <a href="single.html">
                            <img src="images/about.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <h3>
                        About BlogForBlog
                    </h3><br>
                    <h6>
                        Hello Friends Welcome To BlogForBlog
                    </h6><br>
                    <p>

                        BlogForBlog is a Professional blog Platform. Here we will provide you only interesting content,
                        which you will like very much.<br><br>



                        We're dedicated to providing you the best of blog, with a focus on dependability and Daily
                        Updates.<br><br>


                        We're working to turn our passion for blog into a booming online website. We hope you enjoy our
                        blog as much as we enjoy offering them to you.<br><br>


                        I will keep posting more important posts on my Website for all of you. Please give your support
                        and love.<br><br>
                        Thanks For Visiting Our Site<br><br>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php include("includes/category.php"); ?>
                    <?php include("includes/recentpost.php");?>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>

</html>