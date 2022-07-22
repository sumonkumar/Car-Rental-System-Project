<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
	

<div class="container-fluid">

	<div class="row bg-dark mx-auto" style="height: 700px;">
				<?php if (isset($_SESSION['signup'])) {?>
				<div class="alert alert-success">
					Successfully Signup!!!Please Login now..
				</div>
			
			<?php } ?>


				<?php if (isset($_SESSION['ad_er_login'])) {?>
				<div class="alert alert-success">
					Name and Password invalid!!
				</div>
			
			<?php } ?>



			<div class="col-md-12 d-flex">

				<div class="left col-md-9 mt-5">
					<form action="confirm_login.php" method="post" class="mt-5" style="height:300px;width:500px;margin-left: 350px;">
				<h1 class="text-center text-uppercase text-success">User Login form</h1>
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="name" placeholder="Enter Your Name">
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px"   type="password" name="password" placeholder="Enter Your Password">
								
				<input class="btn btn-success mt-4"style="border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="submit" value="Login">
				<a href="user.php" class="btn btn-danger mt-4"style="border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px">Back</a>
				

			</form>
				</div>
				</div>

		 	



		</div>
	</div>
</div>






<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php
unset($_SESSION['signup']); 
unset($_SESSION['ad_er_login']);
 ?>

</body>
</html>