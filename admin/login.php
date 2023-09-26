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
                <form>
                    <div class="form-group">
                        <label for="loginemail">Email address</label>
                        <input type="email" class="form-control" id="loginemail" placeholder="Enter email"
                            style="margin-top: 10px; margin-bottom: 10px;">
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
                        <a href="#" style="float:right; color: #454545;">Forgot Password?</a>
                    </div>
                    <center><button id="loginbtn" type="submit" class="btn btn-primary"
                            style="margin-top: 10px;">Login</button></center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>