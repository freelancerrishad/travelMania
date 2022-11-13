<?php
    include 'db_connect.php';

    $username = $_GET['username'];
    $id = $_GET['id'];
    $sql1 = "UPDATE tourguide set available = 'available'
    WHERE id = $id";
    $res = mysqli_query($conn, $sql1);
   
 header("Location: index.php?username=$username");
    ?>

?>