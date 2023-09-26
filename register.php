<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php include("includes/header.php") ?>
    <div class="container blog-css">
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="registerusername">Username</label>
                    <input type="text" class="form-control" id="registerusername"
                        placeholder="Enter email" style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="form-group">
                    <label for="registerfirstname">First name</label>
                    <input type="text" class="form-control" id="registerfirstname"
                        placeholder="Enter email" style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="form-group">
                    <label for="registerfirstname">Last name</label>
                    <input type="text" class="form-control" id="registerfirstname"
                        placeholder="Enter email" style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="form-group">
                    <label for="registeremail">Email address</label>
                    <input type="email" class="form-control" id="registeremail"
                        placeholder="Enter email" style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="form-group">
                    <label for="registerpassword">Password</label>
                    <input type="password" class="form-control" id="registerpassword" placeholder="Password"
                        style="margin-top: 10px; margin-bottom: 10px;">
                </div>
                <center><button id="loginbtn" type="submit" class="btn btn-primary" style="margin-top: 10px;">Register</button></center>
            </form>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>

</html>