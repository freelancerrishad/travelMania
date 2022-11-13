<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="flex justify-center items-center mt-10">
        <div class="w-1/2">
            <form action="search.php?username=<?php echo $_GET['username']; ?>" method="POST">
                <input type="search" name="name" class="w-1/2 rounded" placeholder="Search your hotel"><br><br>
                <input type="submit" value="Submit" name="submit" class="cursor-pointer border border-red-500 px-5 py-2 rounded hover:bg-red-500 ">
            </form>
        </div>
    </div>

    <div class="ml-24 mt-14">
        <p class="text-3xl font-bold">Explore Bangladesh</p>
        <p class="mt-5">This popular destination have a lot to offer</p>
        <div class="flex mt-8">

            <div class=" max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="coxbazar.php?username=<?php echo $_GET['username']; ?>">
                    <img class="rounded-t-lg w-full" src="images/cox.webp" alt="">
                </a>
                <div class="w-80 p-5">
                    <a href="coxbazar.php?username=<?php echo $_GET['username']; ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cox's Bazar</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">60 properties</p>
                    <a href="coxbazar.php?username=<?php echo $_GET['username']; ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ml-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="dhaka.php?username=<?php echo $_GET['username']; ?>">
                    <img class="rounded-t-lg w-full" src="images/dhaka.webp" alt="">
                </a>
                <div class="w-80 p-5">
                    <a href="dhaka.php?username=<?php echo $_GET['username']; ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dhaka</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">79 properties</p>
                    <a href="dhaka.php?username=<?php echo $_GET['username']; ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>


            <div class="ml-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="ctg.php?username=<?php echo $_GET['username']; ?>">
                    <img class="rounded-t-lg w-full" src="images/6662014.webp" alt="" style="height: 320px;">
                </a>
                <div class=" w-80 p-5">
                    <a href="ctg.php?username=<?php echo $_GET['username']; ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Chittagong</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">49 properties</p>
                    <a href="ctg.php?username=<?php echo $_GET['username']; ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ml-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="sylhet.php?username=<?php echo $_GET['username']; ?>">
                    <img class="rounded-t-lg w-full" src="images/sylhet.webp" alt="">
                </a>
                <div class="w-80 p-5">
                    <a href="sylhet.php?username=<?php echo $_GET['username']; ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sylhet</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">10 properties</p>
                    <a href="sylhet.php?username=<?php echo $_GET['username']; ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>






    </div>


</body>

</html>