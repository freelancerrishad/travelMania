<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div>
        <p class="text-center text-2xl font-bold mt-10">Get your package here</p>
    </div>

    <div class="flex flex-wrap justify-around mt-10 gap-10">
        <?php
        include 'db_connect.php';
        $username = $_GET['username'];
        $sql1 = "select * from package";
        $res = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                
      

        ?>
        <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">package name: <?php echo $row['name'] ?></h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Package Description: <?php echo $row['offer'] ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Package area: <?php echo $row['area'] ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Package hotel: <?php echo $row['hotel'] ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Package Vehicle: <?php echo $row['vehicle'] ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Package Restaurant: <?php echo $row['restaurant'] ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Package Price: <?php echo $row['price'] ?></p>
            <a href='payment2.php?username=<?php echo $username?>&id=<?php echo $row['id'] ?>&price=<?php echo $row['price'] ?>' class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Book Now
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

        <?php       }
        }
        ?>

    </div>
</body>

</html>