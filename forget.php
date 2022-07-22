
<?php 
session_start();
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forget Password</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
	

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<?php 
			if (isset($_SESSION['er_forget'])) {?>
				<div class="alert alert-warning">
					Invalid email
				</div>
			
			<?php } ?>	

			<form action="confirm_password.php" method="post" class="mt-5" style="height:300px;width:500px;margin-left: 200px;background-color: #ffcc99" >
				<h1 class="text-center text-uppercase" style="color:#194d19;">Forget Password</h1>
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="email" placeholder="Enter Your Email">
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px"   type="password" name="password" placeholder="Enter Your New Password">
								
				<input class="btn btn-success mt-4"style="background-color: #663300;border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="submit" value="Forget Password">
				

			</form>


		</div>
	</div>
</div>


<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php 

unset($_SESSION['er_forget']);
 ?>

</body>
</html>