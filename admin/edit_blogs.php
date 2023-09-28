<?php

if (isset($_GET['edit_blogs'])) {

    $edit_id = $_GET['edit_blogs'];

    $edit_blog = "SELECT * FROM blog where id='$edit_id'";

    $run_edit_blog = mysqli_query($conn, $edit_blog);

    $row_edit = mysqli_fetch_array($run_edit_blog);

    $b_id = $row_edit['id'];

    $b_author = $row_edit['author'];

    $b_title = $row_edit['title'];

    $b_category = $row_edit['category'];

    $b_image = $row_edit['image'];

    $b_tag = $row_edit['tag'];

    $b_content = $row_edit['content'];
}

$get_b_category = "SELECT * FROM categories WHERE category='$b_category'";

$run_b_category = mysqli_query($conn, $get_b_category);

$row_b_category = mysqli_fetch_array($run_b_category);

$b_cat_title = $row_b_category['category'];

?>


<!DOCTYPE html>

<html>

<head>

    <title> Edit Blogs </title>

</head>

<body>

    <div class="row"><!-- row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Edit Blogs

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Edit Blogs

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Blog Author </label>

                            <div class="col-md-6">

                                <input type="text" name="blog_author" class="form-control" required
                                    value="<?php echo $b_author; ?>" readonly>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Blog Title </label>

                            <div class="col-md-6">

                                <input type="text" name="blog_title" class="form-control" required
                                    value="<?php echo $b_title; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Blog Category </label>

                            <div class="col-md-6">

                                <select name="blog_category" class="form-control">

                                    <option value="<?php echo $b_category; ?>">
                                        <?php echo $b_cat_title; ?>
                                    </option>


                                    <?php

                                    $get_b_cats = "SELECT * FROM categories";

                                    $run_b_cats = mysqli_query($conn, $get_b_cats);

                                    while ($row_b_cats = mysqli_fetch_array($run_b_cats)) {

                                        $b_cat_id = $row_b_cats['id'];

                                        $b_cat_title = $row_b_cats['category'];

                                        echo "<option value='$b_cat_title' >$b_cat_title</option>";

                                    }


                                    ?>


                                </select>

                            </div>

                        </div><!-- form-group Ends -->


                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Blog Image </label>

                            <div class="col-md-6">

                                <input type="file" name="blog_image" class="form-control">
                                <br><img src="images/<?php echo $b_image; ?>" width="70" height="70">

                            </div>

                        </div><!-- form-group Ends -->



                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Blog Tag </label>

                            <div class="col-md-6">

                                <input type="text" name="blog_tag" class="form-control" required
                                    value="<?php echo $b_tag; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Blog Content </label>

                            <div class="col-md-6">

                                <textarea name="blog_content" class="form-control" rows="15"><?php echo $b_content; ?></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update" value="Update Blog"
                                    class="btn btn-primary form-control">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




</body>

</html>


<!--DATA UPDATE  -->

<?php

if (isset($_POST['update'])) {

    $blog_title = $_POST['blog_title'];

    $blog_category = $_POST['blog_category'];

    $blog_image = $_FILES['blog_image']['name'];
    $temp_name = $_FILES['blog_image']['tmp_name'];

    if (empty($blog_image)) {

        $blog_image = $new_blog_image;

    }
    move_uploaded_file($temp_name, "images/$blog_image");

    $blog_tag = $_POST['blog_tag'];

    $blog_content = $_POST['blog_content'];

    $update_blog = "UPDATE blog SET title='$blog_title',category='$blog_category',image='$blog_image',tag='$blog_tag',content='$blog_content' WHERE id='$b_id'";

    $run_update_blog = mysqli_query($conn, $update_blog);

    if ($run_update_blog) {

        echo "<script> alert('Blog has been updated successfully') </script>";

        echo "<script>window.open('index.php?view_blogs','_self')</script>";

    }

}

?>