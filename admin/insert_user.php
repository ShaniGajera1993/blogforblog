<div class="row"><!-- 1  row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / Insert User

            </li>



        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title">

                    <i class="fa fa-money fa-fw"></i> Insert User

                </h3>


            </div><!-- panel-heading Ends -->


            <div class="panel-body"><!-- panel-body Starts -->

                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User firstname: </label>

                        <div class="col-md-6"><!-- col-md-6 Starts -->

                            <input type="text" name="admin_firstname" class="form-control" required>

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User lastname: </label>

                        <div class="col-md-6"><!-- col-md-6 Starts -->

                            <input type="text" name="admin_lastname" class="form-control" required>

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Email: </label>

                        <div class="col-md-6"><!-- col-md-6 Starts -->

                            <input type="text" name="admin_email" class="form-control" required>

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">User Password: </label>

                        <div class="col-md-6"><!-- col-md-6 Starts -->

                            <input type="password" name="admin_password" class="form-control" required>

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6"><!-- col-md-6 Starts -->

                            <input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">

                        </div><!-- col-md-6 Ends -->

                    </div><!-- form-group Ends -->


                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if (isset($_POST['submit'])) {

    $user_firstname = $_POST['admin_firstname'];
    $user_lastname = $_POST['admin_lastname'];
    $user_email = $_POST['admin_email'];
    $user_password = $_POST['admin_password'];

    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    $user_insert = "INSERT INTO admin(firstname,lastname,email,password) VALUES ('$user_firstname','$user_lastname','$user_email','$hashed_password')";

    $run_user_insert = mysqli_query($conn, $user_insert);

    if ($run_user_insert) {

        echo "<script>alert('New User Has been Inserted')</script>";

        echo "<script>window.open('index.php?view_users','_self')</script>";

    }
}

?>