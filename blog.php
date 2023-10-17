<?php

include('admin/includes/db.php');

if (isset($_GET['blog_id'])) {

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



    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['msg'];
        $blog_id = $_GET['blog_id'];

        $insert_comment = "INSERT INTO comments(blog_id,name,email,comment) VALUES('$blog_id','$name','$email','$comment')";
        $run_insert_comment = mysqli_query($conn, $insert_comment);

        if ($run_insert_comment) {

            echo "<script>
                window.onload = function() {
                    $('#successModal').modal('show');
                }
            </script>";
        }
    }

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
            <div class="col-md-8 p-4">
                <div class="blog-grid-top">
                    <div class="blog_info_left_grid" style="position: relative;">
                        <img src="admin/images/<?php echo $blog_image; ?>" class="img-fluid rounded"
                            alt="image not available" style="width:900px;height:400px">
                        <div class="card-footer"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(255, 255, 255, 0.8); padding: 10px;">
                            <div class="row">
                                <div style="text-align: left;" class="col">
                                    <i class="fa fa-user"></i>
                                    <?php echo $blog_author; ?>
                                </div>
                                <div style="text-align: center;" class="col">
                                    <i class="fa fa-list-alt"></i>
                                    <?php echo $blog_category; ?>
                                </div>
                                <div style="text-align: center;" class="col">
                                    <i class="fa fa-tag"></i>
                                    <?php echo $blog_tag; ?>
                                </div>
                                <div style="text-align: right;" class="col">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $blog_date; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4>
                        <?php echo $blog_title; ?>
                    </h4>
                    <br>
                    <div style="font-size: 12px">
                        <?php echo $blog_content; ?>
                    </div>
                </div>
                <div style="border: 1px solid #D3D3D3; margin-top:5%;" class="row">
                    <div class="col-md-6">
                        <form id="algin-form" method="post">
                            <div class="form-group">
                                <h4>Leave a comment</h4><br>
                                <label for="message">Message</label>
                                <textarea name="msg" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <button style="border: 2px solid #A30000;" type="submit" name="submit" id="commentbtn"
                                    class="btn btn-primary">Post Comment</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div style="padding-left: 25px;" class="comment mt-4 text-justify">

                            <?php

                            $status = "approved";

                            $get_comments = "SELECT * FROM comments WHERE blog_id = '$blog_id' AND status = '$status'";

                            $run_get_comments = mysqli_query($conn, $get_comments);

                            if (mysqli_num_rows($run_get_comments) == 0) {
                                echo "<h6>No comments</h6>";
                            } else {
                                while ($row_comments = mysqli_fetch_array($run_get_comments)) {

                                    $name = $row_comments['name'];
                                    $date = $row_comments['date'];
                                    $msg = $row_comments['comment'];

                                    echo "<h6 style='margin:0;'><i class='fa fa-user'></i> $name</h6>
                                        <span style='font-size:12px; margin:0;'><i class='fa fa-clock-o'></i> $date</span>
                                        <p style='padding-left:15px; padding-top:5px; padding-bottom:10px;'> - $msg</p>
                                    ";
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Comment Submitted</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Thanks for your comment. It will be displayed after approval.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="#modelbtn" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Wait for the modal to hide, then redirect to the same blog page
        $('#successModal').on('hidden.bs.modal', function () {
            window.location.href = 'blog.php?blog_id=<?php echo $blog_id; ?>';
        });
    </script>

</body>

</html>