<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Insert Blog Category

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"></i> Insert Blog Category

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->


            <div class="panel-body"><!-- panel-body Starts -->

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Blog Category</label>

                        <div class="col-md-6">

                            <input type="text" name="blog_category" class="form-control">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">

                        </div>

                    </div><!-- form-group Ends -->

                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<!-- DATA insert to DATABASE -->

<?php

if (isset($_POST['submit'])) {

    $b_category = $_POST['blog_category'];

    $insert_category = "INSERT INTO categories(category) VALUES ('$b_category')";

    $run_insert_category = mysqli_query($conn, $insert_category);

    if ($run_insert_category) {

        echo "<script>alert('New Blog Category Has been Inserted')</script>";

        echo "<script>window.open('index.php?view_categories','_self')</script>";

    }
}

?>