<?php

if (isset($_GET['delete_categories'])) {

    $delete_category_id = $_GET['delete_categories'];

    $delete_category = "DELETE FROM categories WHERE id='$delete_category_id'";

    $run_delete_category = mysqli_query($conn, $delete_category);

    if ($run_delete_category) {

        echo "<script>alert('One Blog Category Has been Deleted')</script>";

        echo "<script>window.open('index.php?view_categories','_self')</script>";

    }

}



?>