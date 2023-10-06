<div class="col">
    <h5><strong>Recent Post</strong></h5><br>

    <?php

    $old_blog = "SELECT * from blog ORDER BY date DESC LIMIT 8";
    $run_old_blog = mysqli_query($conn, $old_blog);

    while ($row_blog = mysqli_fetch_array($run_old_blog)) {
        $blog_id = $row_blog['id'];
        $blog_author = $row_blog['author'];
        $blog_title = $row_blog['title'];
        $blog_category = $row_blog['category'];
        $blog_image = $row_blog['image'];
        $blog_tag = $row_blog['tag'];
        $blog_date = $row_blog['date'];

        echo '<div style="border:none;" class="card mb-3" style="max-width: 540px;">
                                    <a href="blog.php?blog_id=' . $blog_id . '">
                                        <div class="row g-0">
                                            <div style="padding-bottom: 10px;" class="col-md-4">
                                                <img src="admin/images/' . $blog_image . '" class="img-fluid rounded-start img-responsive" style="width: 116px; height: 64px; padding-left: 10px;" alt="...">
                                            </div>
                                            <div style="padding-left: 10px; padding-right:10px;" class="col-md-8">
                                                <h6 style="color:black;" class="card-title">' . $blog_title . '</h6>
                                                <p class="card-text"><small class="text-muted">' . $blog_date . '</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>';
    }
    ?>
</div>