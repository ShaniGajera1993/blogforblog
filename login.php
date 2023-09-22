<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="container blog-css">
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="loginemail">Email address</label>
                    <input type="email" class="form-control" id="loginemail"
                        placeholder="Enter email" style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="form-group">
                    <label for="loginpassword">Password</label>
                    <input type="password" class="form-control" id="loginpassword" placeholder="Password"
                        style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="logincheck">
                    <label class="form-check-label" for="logincheck">Check me out</label>
                </div>
                <div class="form-group form-check">
                <a href="#" style="float:right; color: #A30000;">Forgot Password?</a>
                </div>
                <center><button id="loginbtn" type="submit" class="btn btn-primary" style="margin-top: 10px;">Login</button></center>
                <div class="form-group form-check text-center" style="margin-top: 25px;">
                <span>New User?</span>&nbsp<a href="register.php" style="color: #A30000;">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    <?php include("footer.php") ?>
</body>

</html>