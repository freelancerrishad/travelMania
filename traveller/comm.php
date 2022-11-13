<?php 


include 'db_connect.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$message = mysqli_real_escape_string($conn,$_POST['comment']);

$username = $_GET['username'];


$sql = "INSERT INTO comm(name,email,comment,username) VALUES ('$name','$email','$message','$username')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('your comment save successfull.');
    window.location.href='review.php?username=".$username."';
    </script>";
    
}
 ?>