<?php 

if(isset($_GET['delete_blogs'])){

    $delete_b_id = $_GET['delete_blogs'];
    
    $delete_blog = "DELETE FROM blog WHERE id='$delete_b_id'";

    $run_delete_blog = mysqli_query($conn, $delete_blog);

    if($run_delete_blog){

        echo "<script>alert('Blog Deleted Successfully')</script>";
        echo "<script>window.open('index.php?view_blogs','_self')</script>";

    }

}

?>