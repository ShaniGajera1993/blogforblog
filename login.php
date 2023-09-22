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
                        placeholder="Enter email" style="margin-top: 10px;">
                </div>
                <div class="form-group">
                    <label for="loginpassword">Password</label>
                    <input type="password" class="form-control" id="loginpassword" placeholder="Password"
                        style="margin-top: 10px;">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="logincheck" style="margin-top: 10px;">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <center><button id="loginbtn" type="submit" class="btn btn-primary" style="margin-top: 10px;">Login</button></center>
            </form>
        </div>
    </div>

    <?php include("footer.php") ?>
</body>

</html>