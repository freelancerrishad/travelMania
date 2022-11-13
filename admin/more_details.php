<!DOCTYPE html>

<?php

session_start();

include "db_connect.php";

if (!isset($_SESSION["username"])) {
	header("Location: ../signup.php");
}
$username = $_GET['username'];
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!----======== CSS ======== -->
	<script src="https://kit.fontawesome.com/04827ae212.js" crossorigin="anonymous"></script>

	<!----===== Boxicons CSS ===== -->

	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

	<link rel="stylesheet" href="css/style.css">


	<style>
		.height10 {
			height: 10px;
		}

		.mtop10 {
			margin-top: 10px;
		}

		.modal-label {
			position: relative;
			top: 7px
		}
	</style>



	<!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
	<nav class="sidebar close">
		<header>
			<div class="image-text">
				<span class="image">
					<img src="../img/logo.png" alt="">
				</span>

				<div class="text logo-text">
					<span class="name">Travel Mania </span>

				</div>
			</div>

			<i class='bx bx-chevron-right toggle'></i>
		</header>

		<div class="menu-bar">
			<div class="menu">


				<ul class="menu-links">
					<li class="nav-link">
						<?php echo '<a href="home.php?username=' . $username . '">' ?>
						<i class='bx bx-home-alt icon'></i>
						<span class="text nav-text">Home</span>
						</a>
					</li>


					<li class="nav-link">
						<?php echo '<a href="more_details.php?username=' . $username . '">' ?>


						<i class="fa-solid icon fa-circle-check"></i>
						<span class="text nav-text">Hotel Confirm</span>
						</a>
					</li>




					<li class="nav-link">
						'<a href="https://dashboard.tawk.to/#/dashboard/6262fbe67b967b11798c0cda" target="blank">


							<img src="img/chat.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Chat</span>
						</a>
					</li>






				</ul>
			</div>

			<div class="bottom-content">
				<li class="">

					<a href="logout.php">
						<i class='bx bx-log-out icon'></i></a>
					<a href="logout.php"><span class="text nav-text">Logout</span></a>

				</li>

				<li class="mode">
					<div class="sun-moon">
						<i class='bx bx-moon icon moon'></i>
						<i class='bx bx-sun icon sun'></i>
					</div>
					<span class="mode-text text">Dark mode</span>

					<div class="toggle-switch">
						<span class="switch"></span>
					</div>
				</li>

			</div>
		</div>

	</nav>

	<section class="home" style="height: auto;">
		<div class="text">Admin Confirmation</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm">

					<?php
					if (isset($_SESSION['error'])) {
						echo
						"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['error'] . "
					</div>
					";
						unset($_SESSION['error']);
					}
					if (isset($_SESSION['success'])) {
						echo
						"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['success'] . "
					</div>
					";
						unset($_SESSION['success']);
					}
					?>


					<div class="height10">
					</div>
					<div class="row" style="margin-top: 100px; display: flex;
    justify-content: space-around;
    margin-left: -120px;">
						<div class="card mr-3" style="width: 18rem; margin-right: 40px;">
							<img class="card-img-top" src="../images/hotel.webp" alt="Card image cap" height="200px" width="200px">
							<div class="card-body">
								<h5 class="card-title ">Hotel Confirmation</h5>
								<p class="card-text">Confirm the hotels which are booked by the user.</p>
								<a href="hotel-booking?username=<?php echo $_GET['username'] ?>" class="btn btn-primary"> Confirm Now</a>
							</div>
						</div>

						<div class="card" style="width: 18rem; margin-right: 40px;">
							<img class="card-img-top" src="../images/e4385d5498a380542f5497a0de60fcd7.png" alt="Card image cap" height="200px" width="200px">
							<div class="card-body">
								<h5 class="card-title ">Car Rent Confirmation</h5>
								<p class="card-text">Confirm the cars which are booked by the user.</p>
								<a href="car-booking?username=<?php echo $_GET['username'] ?>" class="btn btn-primary"> Confirm Now</a>
							</div>
						</div>

						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="../images/restaurant.jpg" alt="Card image cap" height="200px" width="200px">
							<div class="card-body">
								<h5 class="card-title ">Restaurant Confirmation</h5>
								<p class="card-text">Confirm the Restaurants which are booked by the user.</p>
								<a href="reserverestaurant.php?username=<?php echo $_GET['username'] ?>" class="btn btn-primary"> Confirm Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('add_modal.php') ?>



	</section>

	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTable.bootstrap.min.js"></script>

	<script>
		const body = document.querySelector('body'),
			sidebar = body.querySelector('nav'),
			toggle = body.querySelector(".toggle"),
			searchBtn = body.querySelector(".search-box"),
			modeSwitch = body.querySelector(".toggle-switch"),
			modeText = body.querySelector(".mode-text");

		$(document).ready(function() {
			//inialize datatable
			$('#myTable').DataTable();

			//hide alert
			$(document).on('click', '.close', function() {
				$('.alert').hide();
			})
		});


		toggle.addEventListener("click", () => {
			sidebar.classList.toggle("close");
		})

		searchBtn.addEventListener("click", () => {
			sidebar.classList.remove("close");
		})

		modeSwitch.addEventListener("click", () => {
			body.classList.toggle("dark");

			if (body.classList.contains("dark")) {
				modeText.innerText = "Light mode";
			} else {
				modeText.innerText = "Dark mode";

			}
		});
	</script>

</body>

<style>
	.PP {
		text-align: center;
	}
</style>

</html>