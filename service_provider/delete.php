<?php
	session_start();
	include_once('db_connect.php');
	$username = $_GET['username'];
	$id = $_GET['id'];

	if(isset($_GET['id'])){
		$sql1 = "SELECT * FROM hotel WHERE id = {$id}";
		$result = mysqli_query($conn, $sql1) or die("Query Failed : Select");
		$row = mysqli_fetch_assoc($result);
	  
		unlink("uploads/".$row['image']);

		$sql = "DELETE FROM tourguide WHERE id = '".$_GET['id']."'";
		

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Guide deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting property';
		}
	}
	else{
		$_SESSION['error'] = 'Select Property to delete first';
	}

	header("Location: index.php?username=".$_GET['username']."");
?>