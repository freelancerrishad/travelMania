<!DOCTYPE html>

<?php

session_start();

include "db_connect.php";

if (!isset($_SESSION["username"])) {
	header("Location: ../index.php");
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
						<?php echo '<a href="index.php?username=' . $username . '">' ?>
						<i class='bx bx-home-alt icon'></i>
						<span class="text nav-text">Add Tour Guide</span>
						</a>
					</li>


					<li class="nav-link">
						<?php echo '<a href="more_details.php?username=' . $username . '">' ?>


						<i class="fa-solid icon fa-circle-check"></i>
						<span class="text nav-text">Add Package System</span>
						</a>
					</li>




					<li class="nav-link">
						<?php echo '<a href="coupon.php?username=' . $username . '">' ?>


						<i class="fa-solid icon fa-circle-check"></i>
						<span class="text nav-text">Add Coupon to Users</span>
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
		<div class="text">Add Tour Guide Here</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm">
					<div class="row">
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
					</div>
					<div class="row">
						<?php $username = $_GET['username'];
						echo '<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ADD</a>'; ?>
					</div>
					<div class="height10">
					</div>
					<div class="row">
						<table id="myTable" class="table table-bordered table-striped">
							<thead>
								<th>id</th>
								<th>Name</th>

								<th>Area</th>
								<th>Phone Number</th>

								<th>Price</th>
								<th>Availability</th>
								
								<th>Delete</th>

							</thead>
							<tbody>
								<?php
								include 'db_connect.php';
								$username = $_GET['username'];
								$sql = "SELECT * FROM tourguide";

								//use for MySQLi-OOP
								$result = mysqli_query($conn, $sql) or die("Query Failed");
								if (mysqli_num_rows($result) > 0) {
									while ($row =  mysqli_fetch_assoc($result)) {
										echo
										"<tr>
									<td>" . $row['id'] . "</td>
									
									<td>" . $row['name'] . "</td>
									<td>" . $row['area'] . "</td>
									<td>" . $row['phone'] . "</td>
									<td>" . $row['price'] . "</td>
									
									<td>";
									if($row['available']==='Not Available'){
										echo 'Not available';
										echo '<br>';
										echo '<a href="release.php?username='.$username.'&&id='.$row['id'].'"><button class="btn btn-primary px-4 py-2 rounded text-white">Release Now</button></a>';
									
									}
									else{
										echo "Available";
									}
									echo "</td>";

											echo '<td><a href="delete.php?id=' . $row['id'] . '&&username='.$username.'"><button  class="btn btn-danger">Delete</button></a></td>';
									}
								}


								?>


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<?php include('add_modal.php') ?>


		<!-- Button trigger modal -->
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<?php
					echo $row['id']; ?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<center>
							<h4 class="modal-title" id="myModalLabel">Edit Hotel</h4>
						</center>
					</div>
					<div class="modal-body">
						<div class="container-fluid">

							<?php
							$username = $_GET['username'];
							echo '  
			<form method="POST" action="edit.php?username=' . $username . '">';

							?>
							<input type="hidden" class="form-control" name="id" value="<?php echo $row['property_id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Name:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="property_name" value="<?php echo $row['title']; ?>">
								</div>
							</div>




							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Description:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="property_description" value="<?php echo $row['description']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Price:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="property_price" value="<?php echo $row['price']; ?>">
								</div>
							</div>


							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Hotel Area:</label>
								</div>
								<div class="col-sm-10">

									<select name="area" id="">
										<option value="cox bazar">Cox's Bazar</option>
										<option value="dhaka">Dhaka</option>
										<option value="sylhet">Sylhet</option>
										<option value="ctg">Chittagang</option>
									</select>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Town:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="property_price" value="<?php echo $row['town']; ?>">
								</div>
							</div>



						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
								</form>
						</div>

					</div>
				</div>
			</div>
		</div>
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