<?php 
    include 'header.php';
    include 'db_connect.php';
    $price = $_GET['price'];
    $username = $_GET['username'];
    $hotel_id = $_GET['id'];
    $sql = "INSERT INTO payment (amount,username,hotel_id) VALUES ('$price', '$username', '$hotel_id')";

    

	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Payment added successfully';
        header('Location: hotel_booking.php?username='.$username.'&id='.$hotel_id);
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}


?>