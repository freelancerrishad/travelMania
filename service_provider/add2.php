<?php
session_start();
include_once('db_connect.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$area = $_POST['areaname'];

	$hotel = $_POST['hotel'];
	
	$vehicle = $_POST['vehicle'];
	$restaurant = $_POST['restaurant'];
	$offer = $_POST['offer'];
	$price = $_POST['price'];

       

	$sql = "INSERT INTO package (name,area,hotel,vehicle,restaurant,offer,price) VALUES ('$name','$area','$hotel', '$vehicle', '$restaurant','$offer','$price')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Package added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: more_details.php?username=$username");
?>