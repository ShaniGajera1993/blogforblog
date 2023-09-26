<!-- DATA GET FROM DATABASE -->

<?php

if (isset($_GET['edit_categories'])) {
    
    $edit_category_id = $_GET['edit_categories'];

    $edit_category = "SELECT * FROM categories WHERE id='$edit_category_id'";

    $run_edit_category = mysqli_query($conn, $edit_category);

    $row_edit = mysqli_fetch_array($run_edit_category);

    $category_id = $row_edit['id'];

    $category_name = $row_edit['category'];

}

?>

<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"></i> Edit Product Category

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->


            <div class="panel-body"><!-- panel-body Starts -->

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Blog Category</label>

                        <div class="col-md-6">

                            <input type="text" name="edit_category_name" class="form-control"
                                value="<?php echo $category_name; ?>">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">

                        </div>

                    </div><!-- form-group Ends -->

                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<!-- DATA UPDATE -->
<?php

if (isset($_POST['update'])) {

    $update_category_name = $_POST['edit_category_name'];

    $update_category = "UPDATE categories SET category='$update_category_name' WHERE id='$category_id'";

    $run_update_category = mysqli_query($conn, $update_category);

    if ($run_update_category) {

        echo "<script>alert('Blog Category has been Updated')</script>";

        echo "<script>window.open('index.php?view_categories','_self')</script>";

    }



}



?>