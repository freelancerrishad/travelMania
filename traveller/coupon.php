<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <p class="text-center mt-14 text-5xl font-bold">Are you a special member. See your coupon number if you have....</p>
    <br><br>
    <?php
    include 'db_connect.php';
    $username = $_GET['username'];
    $sql = "SELECT * FROM coupon where username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if(!$row['couponcode']){
                echo "<p class='text-3xl mt-10 text-center font-semibold'>No Coupon Found. Book more from us to get a coupon and discount.</p>";
                echo '<a href="index.php?username='.$username.'"><button class=" ml-52  mt-5 text-center px-5 py-2 border border-red-500">Book Now</button></a>';
            }
            else{
                echo "<p class='text-3xl mt-10 text-center font-semibold'>Your coupon is: ".$row['couponcode']."</p>";
             
            }
        }
    }
    ?>


</body>

</html>