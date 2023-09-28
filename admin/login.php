<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BlogForBlog Admin</a>
    </nav>
    <div class="container blog-css">

        <div class="row row-header">
            <h6>Sign In Here</h6>
        </div>
        <div class="row">
            <div class="form-container">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="loginemail">Email address</label>
                        <input type="email" name="admin_email" class="form-control" id="loginemail"
                            placeholder="Enter email" style="margin-top: 10px; margin-bottom: 10px;"
                            value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
                    </div>
                    <div class="form-group">
                        <label for="loginpassword">Password</label>
                        <input type="password" name="admin_password" class="form-control" id="loginpassword"
                            placeholder="Password" style="margin-top: 10px; margin-bottom: 10px;"
                            value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" autocomplete="on">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="logincheck">
                        <label class="form-check-label" for="logincheck">Remember me</label>
                    </div>
                    <div class="form-group form-check">
                        <a href="#" style="float:right; color: #454545;">Forgot Password?</a>
                    </div>
                    <center><button id="loginbtn" name="admin_login" type="submit" class="btn btn-primary"
                            style="margin-top: 10px;">Login</button></center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php

session_start();
include("includes/db.php");

if (isset($_POST['admin_login'])) {

    $user_email = $_POST['admin_email'];
    $user_password = $_POST['admin_password'];

    $login_user = "SELECT * FROM admin where email='$user_email'";
    $run_login_user = mysqli_query($conn, $login_user);

    if ($run_login_user) {
        $row = mysqli_fetch_array($run_login_user);
        $hashed_password = $row['password'];

        if (!empty($_POST['remember'])) {

            setcookie("email", $_POST["admin_email"], time() + (10 * 365 * 24 * 60 * 60));
            setcookie("password", $_POST["admin_password"], time() + (10 * 365 * 24 * 60 * 60));

        } 

        else {

            if (isset($_COOKIE["email"])) {

                setcookie("email", "");

                }

            if (isset($_COOKIE["password"])) {

                setcookie("password", "");

            }
        }

        if (password_verify($user_password, $hashed_password)) {

            $_SESSION['admin_email'] = $user_email;
            echo "<script>alert('You are Logged in into admin panel')</script>";
            echo "<script>window.open('index.php?dashboard','_self')</script>";
        } else {
            // Password is incorrect.
            echo "<script>alert('Email or Password is Wrong')</script>";
        }
    }
}

?>