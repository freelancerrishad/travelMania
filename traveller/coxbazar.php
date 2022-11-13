<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="ml-14 mr-14 mt-14">
        <div class="grid grid-cols-2 gap-14">
            <div class="ml-14">

                <form action="search.php?username=<?php echo $_GET['username']; ?>" method="POST">
                    <input type="search" name="name" class="w-1/2 rounded" placeholder="Search your hotel"><br><br>
                    <input type="submit" value="Submit" name="submit" class="cursor-pointer border border-red-500 px-5 py-2 rounded hover:bg-red-500 ">
                </form>

                <div class="mt-24">

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Your Username
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Hotel Name
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Num of days for booking
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Reservation Status
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Payment
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        <?php





                                        $username = $_GET['username'];
                                        $sql1 = "select * from signup where username='$username'";
                                        $res = mysqli_query($conn, $sql1);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                                                // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

                                                echo $row['username'];

                                                echo '<br>';
                                            }
                                        } else {
                                            echo 'no data found';
                                        }

                                        ?>

                                    </th>

                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        <?php





                                        $username = $_GET['username'];
                                        $sql1 = "select * from hotel as ho JOIN roombook as room ON room.hotel_id = ho.id WHERE room.username = '$username';";
                                        $res = mysqli_query($conn, $sql1);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                                                // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

                                                echo $row['title'];

                                                echo '<br>';
                                            }
                                        } else {
                                            echo 'no data found';
                                        }

                                        ?>

                                    </th>

                                    <td class="py-4 px-6">

                                        <?php





                                        $username = $_GET['username'];
                                        $sql1 = "select * from roombook where username='$username'";
                                        $res = mysqli_query($conn, $sql1);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                                                // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

                                                echo $row['nodays'];

                                                echo '<br>';
                                            }
                                        } else {
                                            echo 'no data found';
                                        }

                                        ?>
                                    </td>
                                    <td class="py-4 px-6">

                                        <?php





                                        $username = $_GET['username'];
                                        $sql1 = "select * from roombook where username='$username'";
                                        $res = mysqli_query($conn, $sql1);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                                                // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

                                                echo $row['stat'];

                                                echo '<br>';
                                            }
                                        } else {
                                            echo 'no data found';
                                        }

                                        ?>
                                    </td>
                                    <td class="py-4 px-6">
                                        <?php





                                        $username = $_GET['username'];
                                        $sql1 = "select * from roombook where username='$username'";
                                        $res = mysqli_query($conn, $sql1);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                                                // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];
                                                if($row['stat']=='Not Conform'){
                                                    echo 'Not confirm yet';
                                                }
                                                else{
                                                    echo $row['price'];
                                                }
                                              
                                                echo '<br>';
                                            }
                                        } else {
                                            echo 'no data found';
                                        }

                                        ?>
                                    </td>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div>

                <?php






                $sql1 = "select * from hotel where hotel_area = 'cox bazar'";
                $res = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                        // echo "<a href='view.php?id=".$row['property_id']."'>".$row['property_name'];

                        echo '
        
        
  <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
  <a href="hotel_reservation.php?id=' . $row['id'] . '&&username=' . $_GET['username'] . '&&price=' . $row['price'] . '">
      <img class="rounded-t-lg h-80 w-full" src="../admin/uploads/' . $row['image'] . '" alt="" >
  </a>
  <div class="p-5">
  <a href="hotel_reservation.php?id=' . $row['id'] . '&&username=' . $_GET['username'] . '&&price=' . $row['price'] . '">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">' . $row['title'] . '</h5>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description: ' . $row['description'] . '</p>
      
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Town of Coxs Bazar: ' . $row['town'] . '</p>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Price:' . $row['price'] . '</p>
     
  </div>
  </div>
  ';

                        echo '<br>';
                    }
                } else {
                    echo 'no data found';
                }

                ?>


            </div>
        </div>
    </div>
</body>

</html>