<?php

$conn = mysqli_connect("localhost", "root", "", "blogforblogdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo '<script>console.log("Connected Successfully"); </script>';
?>