<!DOCTYPE html>
<html lang="en">


  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>SignUp As Service Provider</title>
</head>
<body>
<div class="h-14 -mt-5">
    <?php 
include 'header.php' ;
 ?>
   </div>
    <div class="hero">
        <section class="container sign_in">
            <div class="w-50 bg-light m-auto p-5 rounded-3">
                <div>
                    <form action="signupServiceAction.php" method="post">
                        <label for="">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Write Your Email">
                        <label for="">Name</label>
                        <input type="name" name="name" class="form-control" placeholder="Write Your Email">
                        <br>
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <br>
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                        <br>
                        <label for="">Phone Number</label>
                        <input type="number" name="mobile" class="form-control" placeholder="Phone Number">
                        <br>
                        <label for="">Password</label>
                        <input type="password" name="password1" class="form-control" placeholder="Write Your Password">
                        <br>
                        <input type="submit" value="Create account" class="btn btn-success w-100 rounded-5">
                    </form>
                    <br>
                    <br>
                    <span>Already have an account?</span><br>
                    <a href="login.php" class="text-success"><h5>Log in</h5></a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>