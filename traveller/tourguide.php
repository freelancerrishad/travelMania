<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide</title>
</head>
<body>
    <?php include 'db_connect.php';
    include 'header.php';
     ?>

     
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Guide Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Area
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Availability
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
        include 'db_connect.php';
        $username = $_GET['username'];
        $sql1 = "select * from tourguide";
        $res = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                
      

        ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $row['name'];?>
                </th>
                <td class="py-4 px-6">
                <?php echo $row['phone'];?>
                </td>
                <td class="py-4 px-6">
                <?php echo $row['area'];?>
                </td>
                <td class="py-4 px-6">
                <?php echo $row['price'];?>
                </td>
                <td>
                    <?php 
                        if($row['available']==='available'){
                            echo 'available';
                            echo '<br>';
                            echo '<a href="booknow.php?username='.$username.'&&id='.$row['id'].'"><button class="bg-blue-500 px-4 py-2 rounded text-white">Book Now</button></a>';
                        }
                        else{
                            echo "Not Available";
                        }
                    ?>
                </td>
            </tr>

          <?php }
        }
        ?>
           
        </tbody>
    </table>
</div>

</body>
</html>