<?php
session_start(); 
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale="1">
	<title>Welcome to Car Rental System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<style>

	.card:hover{
		box-shadow: 2px 2px 20px tomato;
		cursor: pointer;
	}

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

</style>

<body>

<div class="container-fluid">
				<?php if (isset($_SESSION['plz_login'])) {?>
				<div class="alert alert-success">
					For see user list,Please login as a admin..
				</div>
			
			<?php } ?>

<!--top bar-->
<div class="top-bar">
	<div class="row mx-auto">
		<div class="col-md-12 bg-success">
			<nav class="navbar navbar-expand-lg sticky-top  bg-success navbar-light">
				<a class="navbar-brand font-weight-bold text-warning" href="#">sCarRentals</a>
				<ul class="navbar-nav ml-auto">
					<a href="admin.php"><li class="nav-item mr-3"><span class="text-dark font-weight-bold mt-2" style="font-size:18px">Admin</span></li></a>
					<a href="user.php"><li class="nav-item mr-3"><span class="text-dark font-weight-bold mt-2" style="font-size:18px">User</span></li></a>
				</ul>
			</nav>
		</div>
	</div>
</div>


<!-- Slider/Carousel -->
		<div class="row">
			<div class="col-md-12">
				<div id="herocarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#herocarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#herocarousel" data-slide-to="1"></li>
			    <li data-target="#herocarousel" data-slide-to="2"></li>
			    <li data-target="#herocarousel" data-slide-to="3"></li>
			    <li data-target="#herocarousel" data-slide-to="4"></li>
			    <li data-target="#herocarousel" data-slide-to="5"></li>

			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="image/a.jpg"style="width: 100%;">
			    </div>
			    <div class="carousel-item">
			      <img src="image/b.jpg" style="width: 100%;">
			    </div>
			    <div class="carousel-item">
			      <img src="image/c.jpg" style="width: 100%;">
			    </div>
			    <div class="carousel-item">
			      <img src="image/d.jpg" style="width: 100%;">
			    </div>
			    <div class="carousel-item">
			      <img src="image/e.jpg" style="width: 100%;">
			    </div>
			    <div class="carousel-item">
			      <img src="image/f.jpg" style="width: 100%;">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#herocarousel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			 
			  </a>
			  <a class="carousel-control-next" href="#herocarousel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
	
			  </a>
			</div>
			</div>
		</div>

<!-- Service Area -->
		<section id="service">
		<h1 class="text-center text-info p-3">Service Area</h1>
		<div class="row">
			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<!--<i class="fas fa-taxi fa-7x mx-auto"></i>-->
					<img src="image/a.jpg" alt="">
					<h2 class="card-title text-info text-center">Monthly Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
					<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>	

			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/b.jpg" alt="">
					<h2 class="card-title text-info text-center">Monthly Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>		

			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/c.jpg" alt="">
					<h2 class="card-title text-info text-center">Monthly Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>		

			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/d.jpg" alt="">
					<h2 class="card-title text-info text-center">Monthly Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>
		</div>

		<!--second service area-->
		<div class="row">
		<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/e.jpg" alt="">
					<h2 class="card-title text-info text-center">Weekly Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>

		<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/f.jpg" alt="">
					<h2 class="card-title text-info text-center">Weekly Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>

		<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/a.jpg" alt="">
					<h2 class="card-title text-info text-center">Daily Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>

		<div class="col-md-3">
				<div class="card mt-4 p-2">
					<img src="image/b.jpg" alt="">
					<h2 class="card-title text-info text-center">Daily Service</h2>
					<p class="text-justify">Rent it from sCarRentals. It is cheap. Best for you. All facilities are available here.
						<span>&#2547;</span>500 per hour.</p>
						<a href="login.php" class="btn btn-info"> Rent </a>
				</div>
			</div>	
		</div>
		</section>

		<!-- Our Team -->
		<section id="team">		

			<h1 class="text-center text-info p-3">Our Team</h1>
		<div class="row">
			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<i class="fas fa-user fa-7x mx-auto"></i>
					<h2 class="card-title text-info text-center"> Sumon Hazra </h2>
					<h5 class="card-subtitle text-center">Admin</h5>
					<p class="text-justify">Hi, I am Sumon Hazra. I am the Admin of this system. This is the best way for you to rent a car. Choose and get your will from here.</p>
					<div class="d-flex justify-content-around">
						<a href=""> <i class="fab fa-facebook"></i></a>
						<a href=""> <i class="fab fa-twitter"></i></a>
						<a href=""> <i class="fab fa-instagram"></i></a>
						<a href=""> <i class="fab fa-linkedin"></i></a>
						</div>
				</div>
			</div>			
			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<i class="fas fa-user fa-7x mx-auto"></i>
					<h2 class="card-title text-info text-center">Jalal Hossain</h2>
					<h5 class="card-subtitle text-center">IT Officer</h5>
					<p class="text-justify">Hi, I am Jalal Hossain. I am the IT Officer of this system. This is the best way for you to rent a car. Choose and get your will from here.</p>
					<div class="d-flex justify-content-around">
						<a href=""> <i class="fab fa-facebook"></i></a>
						<a href=""> <i class="fab fa-twitter"></i></a>
						<a href=""> <i class="fab fa-instagram"></i></a>
						<a href=""> <i class="fab fa-linkedin"></i></a>
						</div>
				</div>
			</div>			
			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<i class="fas fa-user fa-7x mx-auto"></i>
					<h2 class="card-title text-info text-center">Nur Islam</h2>
					<h5 class="card-subtitle text-center">Manager</h5>
					<p class="text-justify">Hi, I am Nur Islam. I am the Manager of this system. This is the best way for you to rent a car. Choose and get your will from here.</p>
					<div class="d-flex justify-content-around">
						<a href=""> <i class="fab fa-facebook"></i></a>
						<a href=""> <i class="fab fa-twitter"></i></a>
						<a href=""> <i class="fab fa-instagram"></i></a>
						<a href=""> <i class="fab fa-linkedin"></i></a>
						</div>
				</div>
			</div>			
			<div class="col-md-3">
				<div class="card mt-4 p-2">
					<i class="fas fa-user fa-7x mx-auto"></i>
					<h2 class="card-title text-info text-center">Habib</h2>
					<h5 class="card-subtitle text-center">Director</h5>
					<p class="text-justify">Hi, I am Habib. I am the Director of this system. This is the best way for you to rent a car. Choose and get your will from here.</p>
					<div class="d-flex justify-content-around">
						<a href=""> <i class="fab fa-facebook"></i></a>
						<a href=""> <i class="fab fa-twitter"></i></a>
						<a href=""> <i class="fab fa-instagram"></i></a>
						<a href=""> <i class="fab fa-linkedin"></i></a>
						</div>
				</div>
			</div>
		</div>
		</section>

		<!--last section-->
		<div class="row mx-auto bg-dark mt-5">

			<div class="col-md-3 mt-5">
				<h1 class="text-left text-white" style="font-size: 18px">Latest From Blog</h1>
				<h2 class="text-left text-white" style="font-size: 18px;">Car Rental</h2>
				<p class="text-white" style="font-size: 14px;">Thursday, 27 May 2021</p>
				<p class="text-white" style="font-size: 14px;">A booking engine is at the forefront of the car rental reservation system. Synced up with the inventory database, the engine obtains the updated list of available cars for the dates, accessories that come with them, and their quotes. Additionally, the module typically performs the following functions.</p>
			</div>

			<div class="col-md-3 mt-5 mb-4">
				<h1 class="text-left text-white" style="font-size: 18px">Link Block</h1>
				<a href="#service" class="text-primary mt-5" style="font-size: 14px;">Service Area</a><br><br>
				<a href="index.php" class="text-primary" style="font-size: 14px;">Top</a><br><br>
				<a href="#team" class="text-primary" style="font-size: 14px;">Our team</a><br><br>
				<a href="admin.php" class="text-primary" style="font-size: 14px;">Admin</a><br><br>
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
<?php 
unset($_SESSION['plz_login']);
 ?>

</body>
</html>
