
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
	<title>View Single Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<style>
	body{
		background-color: pink;
	}
</style>
<body>
	
<div class="container-fluid">

	<div class="row mx-auto">
		<div class="col-md-12">
		

	
			<div class="header bg-white mt-2" style="height:80px;border:4px  solid green; ">
					<h1 class="text-center text-uppercase" style="color:#4d2600;font-size: 55px ">VIEW SINGLE USER</h1>
			</div>

			<table class="table table-bordered table-striped mt-4">
				<tr>
					<th>Name</th>
					<td><?=$row['name']?></td>
				</tr>
				<tr>
					<th>EMAIL ADDRESS</th>
					<td><?=$row['email']?></td>
				</tr>

				<tr>
					<th>Phone no</th>
					<td><?=$row['phone']?></td>
				</tr>

		
			</table>
				<div class="mt-4">
				<a class="btn btn-info " href="logout.php" style="background-color: #663300;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:#cc6600">Logout</span></a>
				<a class="btn btn-info ml-2" href="display.php" style="background-color: #663300;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:#cc6600">Back</span></a>

			</div>


	    </div>
	</div>
</div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>