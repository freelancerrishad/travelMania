<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
      
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>

                    <li>
                        <a href="roombook.php
                        
                        "><i class="fa fa-bar-chart-o"></i> Car Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>




                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Car Booking </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <?php
                include('../db_connect.php');
                $sql = "select * from rentvehicle";
                $re = mysqli_query($conn, $sql);
                $c = 0;
                while ($row = mysqli_fetch_array($re)) {
                    $new = $row['stat'];
                    $cin = $row['cin'];
                    $id = $row['id'];
                    if ($new == "Not Conform") {
                        $c = $c + 1;
                    }
                }





                ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <button class="btn btn-default" type="button">
                                                        New Car Bookings <span class="badge"><?php echo $c; ?></span>
                                                    </button>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                            <div class="panel-body">
                                                <div class="panel panel-default">

                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Country</th>
                                                                        <th>Vahicle</th>
                                                                        <th>Number of vehicle</th>
                                                                       
                                                                        <th>Check In</th>
                                                                        <th>Check Out</th>
                                                                       
                                                                        <th>Price</th>
                                                                        <th>More</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php
                                                                    $tsql = "select * from rentvehicle";
                                                                    $tre = mysqli_query($conn, $tsql);
                                                                    while ($trow = mysqli_fetch_array($tre)) {
                                                                        $co = $trow['stat'];
                                                                        if ($co == "Not Conform") {
                                                                            echo "<tr>
												<th>" . $trow['id'] . "</th>
												<th>" . $trow['FName'] . " " . $trow['LName'] . "</th>
												<th>" . $trow['Email'] . "</th>
												<th>" . $trow['Country'] . "</th>
												<th>" . $trow['vehicle'] . "</th>
												
												
												<th>" . $trow['cin'] . "</th>
												<th>" . $trow['cout'] . "</th>
                                                
												<th>" . $trow['stat'] . "</th>
												<th>" . $trow['price'] . "</th>
												<th><a href='roombook.php?rid=" . $trow['id'] . "&&price=" . $trow['price'] . " ' class='btn btn-primary'>Action</a></th>
												</tr>";
                                                                        }
                                                                    }
                                                                    ?>

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End  Basic Table  -->
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                    $rsql = "SELECT * FROM `rentvehicle`";
                                    $rre = mysqli_query($conn, $rsql);
                                    $r = 0;
                                    while ($row = mysqli_fetch_array($rre)) {
                                        $br = $row['stat'];
                                        if ($br == "Conform") {
                                            $r = $r + 1;
                                        }
                                    }

                                    ?>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    <button class="btn btn-primary" type="button">
                                                        Booked Vehicles <span class="badge"><?php echo $r; ?></span>
                                                    </button>

                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                            <div class="panel-body">
                                                <?php
                                                $msql = "SELECT * FROM `rentvehicle`";
                                                $mre = mysqli_query($conn, $msql);

                                                while ($mrow = mysqli_fetch_array($mre)) {
                                                    $br = $mrow['stat'];
                                                    if ($br == "Conform") {
                                                        $fid = $mrow['id'];

                                                        echo "<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>" . $mrow['FName'] . "</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
														<a href=show.php?sid=" . $fid . "><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
													Show
													</button></a>
															
														</div>
													</div>	
											</div>";
                                                    }
                                                }
                                                ?>

                                            </div>

                                        </div>

                                    </div>
                                    <?php

                                    $fsql = "SELECT * FROM `contact`";
                                    $fre = mysqli_query($conn, $fsql);
                                    $f = 0;
                                    while ($row = mysqli_fetch_array($fre)) {
                                        $f = $f + 1;
                                    }

                                    ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- DEOMO-->
            <div class='panel-body'>
                <button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                    Update
                </button>
                <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                <h4 class='modal-title' id='myModalLabel'>Change the User name and Password</h4>
                            </div>
                            <form method='post>
                                        <div class=' modal-body'>
                                <div class='form-group'>
                                    <label>Change User name</label>
                                    <input name='usname' value='<?php echo $fname; ?>' class='form-control' placeholder='Enter User name'>
                                </div>
                        </div>
                        <div class='modal-body'>
                            <div class='form-group'>
                                <label>Change Password</label>
                                <input name='pasd' value='<?php echo $ps; ?>' class='form-control' placeholder='Enter Password'>
                            </div>
                        </div>

                        <div class='modal-footer'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                            <input type='submit' name='up' value='Update' class='btn btn-primary'>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--DEMO END-->




        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>