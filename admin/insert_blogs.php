<div class="row"><!-- row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"> </i> Dashboard / Insert Blog

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title">

                    <i class="fa fa-money fa-fw"></i> Insert Blog

                </h3>

            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->

                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"> Blog Title </label>

                        <div class="col-md-6">

                            <input type="text" name="blog_title" class="form-control" required>

                        </div>

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"> Blog Category </label>

                        <div class="col-md-6">


                            <select name="blog_category" class="form-control">

                                <option> Select a Blog Category </option>


                                <!--DATA GET  -->

                                <?php

                                $get_cat = "select * from categories";

                                $run_cat = mysqli_query($conn, $get_cat);

                                while ($row_cat = mysqli_fetch_array($run_cat)) {

                                    $cat_id = $row_cat['id'];

                                    $cat_name = $row_cat['category'];

                                    echo "<option value='$cat_name'>$cat_name</option>";

                                }

                                ?>

                            </select>

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"> Blog Image </label>

                        <div class="col-md-6">

                            <input type="file" name="blog_image" class="form-control" required>

                        </div>

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"> Blog Tag </label>

                        <div class="col-md-6">

                            <input type="text" name="blog_tag" class="form-control" required>

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"> Blog Content </label>

                        <div class="col-md-6">

                            <textarea name="blog_content" id="blog_content" class="form-control" rows="15"></textarea>

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="submit" value="Insert Product"
                                class="btn btn-primary form-control">

                        </div>

                    </div><!-- form-group Ends -->

                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if (isset($_POST['submit'])) {

    $blog_title = $_POST['blog_title'];

    $blog_category = $_POST['blog_category'];

    $blog_image = $_FILES['blog_image']['name'];
    $temp_name = $_FILES['blog_image']['tmp_name'];
    move_uploaded_file($temp_name, "images/$blog_image");

    $blog_tag = $_POST['blog_tag'];

    $blog_content = $_POST['blog_content'];

    $insert_blog = "INSERT INTO blog(author,title,category,image,tag,content) VALUES ('$admin_firstname','$blog_title','$blog_category','$blog_image','$blog_tag','$blog_content')";

    $run_insert_blog = mysqli_query($conn, $insert_blog);

    if ($run_insert_blog) {

        echo "<script>alert('Blog inserted successfully')</script>";
        echo "<script>window.open('index.php?view_blogs','_self')</script>";
    }

}

?>