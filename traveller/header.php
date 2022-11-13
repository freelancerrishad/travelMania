<?php 
	include 'db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

	<link rel="stylesheet" href="css/headerstyle.css">
	<title></title>
	<style>
		.show{
			display: none;
		}
	</style>
</head>

<body>

	<header>
		<nav class="grid grid-cols-3 px-10 my-10 gap-10">
			<div>
				<a href="index.php?username="><p class="text-blue-400 font-bold text-3xl text-center">Travel Menia</p></a>
			</div>
			<div>
				<ul class="flex font-bold">
				<a href="index.php?username=<?php echo $_GET['username'] ?>"><li class="ml-5 hover:border-b-2 hover:border-orange-400">Home</li></a>
					<a href="booking.php?username=<?php echo $_GET['username'] ?>"><li class="ml-5 hover:border-b-2 hover:border-orange-400">Booking</li></a>
			
				
					<a href="coupon.php?username=<?php echo $_GET['username'] ?>"><li class="ml-5 hover:border-b-2 hover:border-orange-400">Coupon</li></a>
					<a href="review.php?username=<?php echo $_GET['username'] ?>"><li class="ml-5 hover:border-b-2 hover:border-orange-400">Review</li></a>
				</ul>
			</div>
			<div>
			
					<div>
					<a href="logout.php"><button class="border border-blue-400 py-2 px-5 rounded-xl hover:bg-blue-400 hover:text-white">
					Logout</button></a>
					</div>
					
					
				
			</div>
		</nav>
		<div></div>
		
	</header>

<script>
	function dropdown(){
		const dropdown = document.getElementById("dropdown-menu");
		

		if(dropdown.classList.contains('show')){
			dropdown.classList.remove('show');
		}
		else{
			dropdown.classList.add('show')
		}
  

		
			
		
	}
</script>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
	<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>

</html>