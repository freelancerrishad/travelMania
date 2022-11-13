<?php
$hostname = "localhost";
$username = 'root';
$password = '';
$db = 'abc';

$conn = mysqli_connect($hostname,$username,$password,$db) or die("Connection failed : " . mysqli_connect_error());


?>
