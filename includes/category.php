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
    </style>
</head>
<div class="right-blog-info text-left">
    <h5><strong>Categories</strong></h5><br>
    <ul class="list-group single">
        <?php
        include("admin/includes/db.php");

        $view_category = "SELECT * FROM categories";

        $run_view_category = mysqli_query($conn, $view_category);


        while ($row_view = mysqli_fetch_array($run_view_category)) {
            $categories = $row_view['category'];
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a id="category-css" href="index.php?categories=<?php echo $categories; ?>">
                    <?php echo $categories; ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul><br>
</div>