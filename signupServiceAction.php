<?php
$check = 0;
$check_pass = 0;
$check_email  = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile_num = mysqli_real_escape_string($conn, $_POST["mobile"]);

    $address = mysqli_real_escape_string($conn, $_POST["address"]);

    $password = mysqli_real_escape_string($conn, $_POST["password1"]);

    $password = md5($password);
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM signup WHERE username='{$username}'")) > 0) {
        echo "<script>alert('{$username} - This username has already taken.');
        window.location.href='signup.php';
        </script>";
    } else {
        $sql = "INSERT INTO signup(name,username,address,number,password,role) VALUES ('{$name}','{$username}','{$address}','{$mobile_num}','{$password}',1)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('your signup successfull.');
        window.location.href='index.php';
        </script>";
        } else {
            echo "error";
        }
    }
}
