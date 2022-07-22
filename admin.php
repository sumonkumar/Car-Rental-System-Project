<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale="1">
	<title>Online Examination System</title>
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
</style>

<body>

<div class="container-fluid">

<!--top bar-->
<div class="top-bar">
	<div class="row bg-primary mx-auto">
				<div class="col-md-12">
					<marquee width="100%" direction="right" height="50px">
						<h4 class="text-white mt-2">This page is for Admin Only<h4>
					</marquee>
				</div>
			</div>
	<div class="row mx-auto">
		<div class="col-md-12 bg-dark">
			<nav class="navbar navbar-expand-lg sticky-top navbar-light">
				<a class="navbar-brand font-weight-bold text-warning" href="#">sCarRentals</a>

				<ul class="navbar-nav ml-auto">
				<li class="nav-item mr-3">
				<a href="admin_signup.php"><button class="btn btn-success">Signup</button></a>
				</li>
				<li class="nav-item mr-3">
				<a href="admin_login.php"><button class="btn btn-success">Login</button>
				</a>
				</li>
				<li class="nav-item">
				<a href="index.php"><button class="btn btn-danger">Back</button></a>
				</li>
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
				<h2 class="text-left text-white" style="font-size: 18px;">Post Title</h2>
				<p class="text-white" style="font-size: 14px;">Thursday, 27 May 2021</p>
				<p class="text-white" style="font-size: 14px;">A booking engine is at the forefront of the car rental reservation system. Synced up with the inventory database, the engine obtains the updated list of available cars for the dates, accessories that come with them, and their quotes. Additionally, the module typically performs the following functions.</p>
			</div>

			<div class="col-md-3 mt-5 mb-4">
				<h1 class="text-left text-white" style="font-size: 18px">Link Block</h1>
				<a href="admin.php" class="text-primary" style="font-size: 14px;">Top</a><br><br>
				<a href="#team" class="text-primary" style="font-size: 14px;">Our team</a><br><br>
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

</div>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
