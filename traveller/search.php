<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Document</title>
</head>
<body>
    

<?php  
// include 'db_connect.php';
include 'header.php';
$location = mysqli_real_escape_string($conn,$_POST['name']);







if (isset($_POST['submit'])) {
   
  $sql1 = "select * from hotel where title like '%$location%' or description like '%$location%' or hotel_area like '%$location%'";
  $res = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
      // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

      echo '
      
      
<div class="mx-96 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
<a href="">
    <img class="rounded-t-lg h-96 w-full" src="../admin/uploads/'.$row['image'].'" alt="" >
</a>
<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">'.$row['title'].'</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">'.$row['description'].'</p>
   
</div>
</div>
';
     
      echo '<br>';
      
    
    }
  } else {
    echo 'no data found';
  }
}
else{
    echo "there is a problem";
}

?>

</body>
</html>