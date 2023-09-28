<?php 

if(isset($_GET['delete_users'])){

    $delete_user_id = $_GET['delete_users'];

    $delete_user = "DELETE FROM admin WHERE id = '$delete_user_id'";

    $run_delete_user = mysqli_query($conn, $delete_user);

    if($run_delete_user){

        echo "<script>alert('One User Has been Deleted')</script>";

        echo "<script>window.open('index.php?view_users','_self')</script>";
    }
}

?>