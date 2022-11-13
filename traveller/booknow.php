<?php
    include 'db_connect.php';

    $username = $_GET['username'];
    $id = $_GET['id'];
    $sql1 = "UPDATE tourguide
    SET username ='$username', available = 'Not Available'
    WHERE id = $id";
    $res = mysqli_query($conn, $sql1);
   
 header("Location: tourguide.php?username=$username");
    ?>

?>