<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 10%;
        }

        .pagination .page-item .page-link {
            border: 1px solid #A30000;
            background-color: white;
            color: #A30000;
        }

        .pagination .page-item .page-link:hover {
            background-color: #A30000;
            color: white;
        }

        .pagination .page-item.active .page-link {
            background-color: #A30000;
            color: white;
            border: 1px solid #A30000;
        }

        .pagination .page-item .page-link:focus {
            background-color: #A30000;
            color: white;
            border: 1px solid #A30000;
            outline: none;
        }

        @media (max-width: 767px) {
            .pagination-container {
                margin-top: 20px;
            }

            .pagination {
                flex-wrap: wrap;
            }

            .pagination .page-item {
                margin-right: 5px;
            }
        }
    </style>

</head>

<body>
    <?php include("includes/header.php") ?>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;


    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    $alert = '';

    if (isset($_POST['submitcontact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contactblogforblog@gmail.com'; // Gmail address which you want to use as SMTP server
            $mail->Password = '#'; // Gmail address Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';

            $mail->setFrom('contactblogforblog@gmail.com'); // Gmail address which you used as SMTP server
            $mail->addAddress('contactblogforblog@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

            $mail->send();
            echo "<script>window.onload = function() { $('#successModal').modal('show'); }</script>";
        } catch (Exception $e) {
            $alert = '<div class="alert-error">
                <span>' . $e->getMessage() . '</span>
              </div>';
        }
    }

    ?>
    <div class="container blog-css">
        <div class="row">
            <div class="col-md-8 p-4">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <?php

                    include("admin/includes/db.php");

                    // Define the number of blog posts to display per page
                    $postsPerPage = 4;

                    // Get the current page number from the URL
                    if (isset($_GET['page'])) {
                        $currentPage = $_GET['page'];
                    } else {
                        $currentPage = 1;
                    }

                    // Calculate the offset to retrieve the correct set of blog posts
                    $offset = ($currentPage - 1) * $postsPerPage;

                    // Modify your SQL query to retrieve the appropriate set of blog posts
                    $view_blog = "SELECT * FROM blog LIMIT $offset, $postsPerPage";
                    $run_view_blog = mysqli_query($conn, $view_blog);

                    while ($row_blog = mysqli_fetch_array($run_view_blog)) {
                        $blog_id = $row_blog['id'];
                        $blog_author = $row_blog['author'];
                        $blog_title = $row_blog['title'];
                        $blog_category = $row_blog['category'];
                        $blog_image = $row_blog['image'];
                        $blog_tag = $row_blog['tag'];
                        $blog_date = $row_blog['date'];

                        echo '<div class="col">
                                <a href="blog.php?blog_id=' . $blog_id . '">
                                <div class="card" style="border:none;">
                                    <img src="admin/images/' . $blog_image . '" class="card-img-top img-fluid img-responsive" style="width:406px;height:250px" alt="...">
                                    <div class="card mt-3" style="border:none; color:black;">
                                        <h6 class="card-title">' . $blog_title . '</h6>
                                    </div>
                                </div>
                                </a>
                            </div>';
                    }
                    ?>
                </div>
                <?php
                // Calculate the total number of pages
                $totalPostsQuery = "SELECT COUNT(*) as total FROM blog";
                $totalPostsResult = mysqli_query($conn, $totalPostsQuery);
                $totalPosts = mysqli_fetch_assoc($totalPostsResult)['total'];
                $totalPages = ceil($totalPosts / $postsPerPage);
                ?>

                <div class="pagination-container">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            if ($currentPage > 1) {
                                echo '<li class="page-item">
                                        <a class="page-link" href="index.php?page=' . ($currentPage - 1) . '" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>';
                            }
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<li class="page-item ';
                                if ($i == $currentPage) {
                                    echo 'active';
                                }
                                echo '"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                            }
                            if ($currentPage < $totalPages) {
                                echo '<li class="page-item">
                                        <a class="page-link" href="index.php?page=' . ($currentPage + 1) . '" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Message sent</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Thanks for contacting us
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="#modelbtn" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <?php include("includes/category.php"); ?>
                    <?php include("includes/recentpost.php"); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>

    <script>
        // Wait for the modal to hide, then redirect to the same blog page
        $('#successModal').on('hidden.bs.modal', function () {
            window.location.href = 'index.php';
        });
    </script>

</body>

</html>