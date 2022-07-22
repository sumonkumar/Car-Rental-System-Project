<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale="1">
	<title>Admin Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">	
</head>

<style>

	.top-bar{
		top:0;
		position: sticky;
		z-index: 1;
	}

	section{
		padding-top: 100px;
	}

	html{
		scroll-behavior: smooth;
	}

	body{
		padding: 0px 12px 12px;
	}
</style>

<body>

<div class="container-fluid">

	<div class="top-bar">
		<div class="row mx-auto">
			<div class="col-md-12 bg-dark">
				<nav class="navbar navbar-expand-lg sticky-top navbar-light">
					<a class="navbar-brand font-weight-bold text-warning" href="#">sCarRentals</a>


					<ul class="navbar-nav ml-auto">
					<a href="add_car.php"><li class="nav-item mr-3"><span class="btn btn-success text-white" style="font-size:15px">Add Car</span></li>				</a>
					<a href="view_car.php"><li class="nav-item mr-3"><span class="btn btn-warning text-white" style="font-size:15px">View Car</span></li></a>
					<a href="display.php"><li class="nav-item mr-3"><span class="btn btn-success text-white" style="font-size:15px">User List</span></li>
					</a>
					<a href=""><li class="nav-item mr-3"><span class="btn btn-warning text-white" style="font-size:15px">Rented Car</span></li>
					</a>

					<li class="nav-item">
					<a href="logout.php"><button class="btn btn-danger" data-toggle="modal" data-target="">Logout</button></a>
					</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="row mx-auto">
		<div class="col-md-12">
			<img src="image/c.jpg" alt="" style="width: 100%;">
		</div>
	</div>

	<!--last section-->
		<div class="row bg-dark mt-5">

			<div class="col-md-3 mt-5">
				<h1 class="text-left text-white" style="font-size: 18px">Latest From Blog</h1>
				<h2 class="text-left text-white" style="font-size: 18px;">Post Title</h2>
				<p class="text-white" style="font-size: 14px;">Thursday, 27 May 2021</p>
				<p class="text-white" style="font-size: 14px;">A booking engine is at the forefront of the car rental reservation system. Synced up with the inventory database, the engine obtains the updated list of available cars for the dates, accessories that come with them, and their quotes. Additionally, the module typically performs the following functions.</p>
			</div>

			<div class="col-md-3 mt-5 mb-4">
				<h1 class="text-left text-white" style="font-size: 18px">Link Block</h1>
				<a href="admin_con.php" class="text-primary" style="font-size: 14px;">Top</a><br><br>
				<a href="user.php" class="text-primary" style="font-size: 14px;">User</a><br><br>
			</div>

			<div class="col-md-3 mt-5">
				<h1 class="text-left text-white" style="font-size: 18px">Company Details</h1>
				<p class="text-white mt-3" style="font-size: 14px;">s Car Rentals</p>
				<p class="text-white" style="font-size: 14px;">2 RN Road, Jashore</p>
				<p class="text-white" style="font-size: 14px;">Jashore Sadar</p>
				<p class="text-white" style="font-size: 14px;">Jashore</p>
				<p class="text-white" style="font-size: 14px;">7400</p>
				<p class="text-white mt-3" style="font-size: 14px;">Tel: 1234 1234567890</p>
				<p class="text-white" style="font-size: 14px;">Fax: 12345 0123456789</p>
				<p class="text-white" style="font-size: 14px;">Email: scarrentals@gmail.com</p>
			</div>

			<div class="col-md-3 mt-5">
				<h1 class="text-left text-white" style="font-size: 18px">Support</h1><br>
				<a href="" class="text-info mt-5" style="font-size: 14px;">Privacy Policy</a><br><br>
				<a href="" class="text-info" style="font-size: 14px;">Terms and Conditions</a>
			</div>
		</div>

		<!-- 	Footer Area -->
		<div class="row mx-auto">
			<div class="col-md-12" style="height:55px; background-color: black;">
				<div class="d-flex justify-content-between p-3">
					<a href="" class="text-white">&copy;Right-All Reserved sCarRentals LTD</a>
					<a href="" class="text-white">Powered By Sumon Kumar Hazra</a>
				</div>	
			</div>
		</div>

</div>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
