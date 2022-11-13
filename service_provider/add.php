<?php
session_start();
include_once('db_connect.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$description = $_POST['areaname'];

	$price = $_POST['price'];
	
	$phone = $_POST['phonenumber'];
	$townName = $_POST['townName'];

       

	$sql = "INSERT INTO tourguide (name,available,phone,area,price,service_provider_name) VALUES ('$name','available','$phone', '$description', '$price','$username')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Guide added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: index.php?username=$username");
?>