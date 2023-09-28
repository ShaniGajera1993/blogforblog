<?php 

if(isset($_GET['edit_users'])){

    $edit_users_id = $_GET['edit_users'];

    $edit_user = "SELECT * FROM admin WHERE id = '$edit_users_id'";

    $run_edit_user = mysqli_query($conn, $edit_user);

    $row_edit_user = mysqli_fetch_array($run_edit_user);

    $user_id = $row_edit_user['id'];

    $user_firstname = $row_edit_user['firstname'];

    $user_lastname = $row_edit_user['lastname'];

    $user_email = $row_edit_user['email'];

}

?>

<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Edit User

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"></i> Edit User

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->


            <div class="panel-body"><!-- panel-body Starts -->

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User firstname</label>

                        <div class="col-md-6">

                            <input type="text" name="edit_user_firstname" class="form-control"
                                value="<?php echo $user_firstname; ?>">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User lasttname</label>

                        <div class="col-md-6">

                            <input type="text" name="edit_user_lastname" class="form-control"
                                value="<?php echo $user_lastname; ?>">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User email</label>

                        <div class="col-md-6">

                            <input type="text" name="edit_user_email" class="form-control"
                                value="<?php echo $user_email; ?>">

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

<?php 

if(isset($_POST['update'])){

    $update_firstname = $_POST['edit_user_firstname'];

    $update_lastname = $_POST['edit_user_lastname'];

    $update_email = $_POST['edit_user_email'];

    $update_user = "UPDATE admin SET firstname = '$update_firstname', lastname = '$update_lastname', email = '$update_email' WHERE id = '$user_id'";

    $run_update_user = mysqli_query($conn, $update_user);

    if($run_update_user){

        echo "<script>alert('User has been Updated')</script>";

        echo "<script>window.open('index.php?view_users','_self')</script>";
    }
}

?>