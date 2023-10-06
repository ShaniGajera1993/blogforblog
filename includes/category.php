<head>
    <style>

#category-css:link, 
#category-css:visited {
    color: black;
}

.single{
    padding-left: 10px;
    padding-right: 10px;
}

.badge-success {
    color: #fff;
    background-color: #A30000;
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem;
}
    </style>
</head>
<div class="right-blog-info text-left">
    <h5><strong>Categories</strong></h5><br>
    <ul class="list-group single">
        <?php
        include("admin/includes/db.php");

        $view_category = " SELECT c.category, COUNT(b.id) AS total_blogs
        FROM categories c
        LEFT JOIN blog b ON c.category = b.category
        GROUP BY c.category";

        $run_view_category = mysqli_query($conn, $view_category);


        while ($row_view = mysqli_fetch_array($run_view_category)) {
            $categories = $row_view['category'];
            $blog_count = $row_view['total_blogs']
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a id="category-css" href="categories.php?category=<?php echo $categories; ?>">
                    <?php echo $categories; ?>
                </a>
                <span class="badge badge-success badge-pill"><?php echo $blog_count; ?></span>
            </li>
            <?php
        }
        ?>
    </ul><br>
</div>