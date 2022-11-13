<?php
include 'db_connect.php';
session_start();


?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/ownerlogin.css">
</head>

<body class="bg-dark">
   
               <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  include 'db_connect.php';
                  if (empty($_POST['username']) || empty($_POST['password'])) {
                     echo '<script>alert("All fild must be fill by you")</script>';
                     die();
                  } else {
                     $username = mysqli_real_escape_string($conn, $_POST['username']);
                     $password = $_POST['password'];
                    

                     $sql = "SELECT username,password FROM admin WHERE username = '$username' AND password = '$password' ";
                     
                     $result = mysqli_query($conn, $sql) or die("Query Failed");

                     if (mysqli_num_rows($result) > 0) {

                        while($row =  mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["username"] = $row['username'];

                        
                           header("Location: home.php?username=$username");
                        
                       
                     }
                  }
                     else{
                        echo '<script>alert("Username and password are not matched");
                           window.location.href="index.php";
                        
                        </script>';
                      
                      }
                  }
               }

             

               ?>
            
</body>

</html>