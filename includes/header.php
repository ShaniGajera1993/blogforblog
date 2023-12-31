<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/main.css">
<link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div class="m-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <h2><strong>BlogsForBlog</strong></h2>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ms-2">
                        <a style="padding-left:10px;" href="index.php" class="nav-item nav-link active">Home</a>
                        <a style="padding-left:10px;" href="about.php" class="nav-item nav-link">About</a>
                        <a style="padding-left:10px;" href="terms.php" class="nav-item nav-link">Terms and Conditions</a>
                        <a style="padding-left:10px;" href="privacy.php" class="nav-item nav-link">Privacy Policy</a>
                    </div>
                    <form class="d-flex ms-auto" action="search.php" method="post">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Search blog">
                            <button id="searchbtn" name="submit" type="submit" class="btn btn-secondary"><i
                                    class="bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>