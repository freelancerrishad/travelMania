<?php
session_start();
include_once('db_connect.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$description = $_POST['areaname'];

	$discount = $_POST['discount'];

       

	$sql = "INSERT INTO coupon (username,couponcode,discount	
	) VALUES ('$name', '$description', '$discount')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Coupon added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: coupon.php?username=$username");
?>