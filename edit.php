<?php 
include('connect.php');

session_start();
if (!isset($_SESSION['ad_login'])) {
	header('location: index.php');

	$_SESSION['plz_login']="true";
}


$id=$_GET['id'];

$sql="SELECT* FROM users WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit and Update User</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<style>
	body{
		background-color: grey;
	}
</style>

<body>
	<div class="container-fluid">
		<div class="row mx-auto">
			<div class="col-md-12">
				<div class="header bg-white mt-2" style="height:80px;border:4px  solid green; ">
					<h1 class="text-center" style="color:#4d2600;font-size: 55px ">Update User Information</h1>
			</div>

								
			<form action="update.php?id=<?=$row['id']?>" method="post" class="" style="margin-left:350px" >


					<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;" type="text" placeholder="Enter Your Name" name="name" value="<?=$row['name']?>" >


				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="email" placeholder="Enter Your Email" name="email" value="<?=$row['email']?>">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;" type="text" placeholder="Enter Your Phone" name="phone" value="<?=$row['phone']?>" >

               <input class="btn btn-success mt-4"style="border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="submit" value="Update">
                          
 
			</form>
				<div class="mt-4" style="margin-left:360px">
					
				<a class="btn btn-info ml-5" href="logout.php" style="background-color: red;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:white;">Logout</span></a>
				<a class="btn btn-info ml-2" href="display.php" style="background-color: black;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:white;">Back</span></a>

			</div>


				
	

				
			</div>
		</div>
	</div>
	

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>




