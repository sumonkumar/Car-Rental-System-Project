<?php 
include('connect.php');

session_start();
if (!isset($_SESSION['ad_login'])) {
	header('location: index.php');

	$_SESSION['plz_login']="true";
}


$id=$_GET['id'];

$sql="SELECT* FROM add_car WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit and Update Car</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<style>
	body{
		background-color: #6C757D;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row mx-auto">
			<div class="col-md-12">
				<div class="header bg-white" style="height:80px;border:4px  solid green; ">
					<h1 class="text-center text-uppercase" style="color:#4d2600;font-size: 55px ">Update Car Info</h1>
			</div>

								
			<form action="confirm_update_car.php?id=<?=$row['id']?>" method="post" enctype="multipart/form-data" class="" style="margin-left:350px" >


					<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;" type="text" placeholder="Enter Car Name" name="carname" value="<?=$row['carname']?>" >


				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="text" placeholder="Enter Car No" name="carno" value="<?=$row['carno']?>">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="text" placeholder="Enter Car Value" name="carvalue" value="<?=$row['carvalue']?>">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="text" placeholder="Enter Car Engine Capacity" name="ecapacity" value="<?=$row['ecapacity']?>">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="text" placeholder="Enter Car Passenger Capacity" name="pcapacity" value="<?=$row['pcapacity']?>">


				<!-- <label for="img" style="margin-left: 57px; margin-top: 10px;">Select image (100 x 100):</label>

				<input class="form-control mt-2" style="width: 400px; margin-left: 60px;" type="file" name="image" value="<?=$row['image']?>"> -->

               <input class="btn btn-success mt-4"style="background-color: green;border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="submit" value="Update">
                          
 
			</form>
				<div class="mt-4" style="margin-left:350px">
					
				</style>>
				<a class="btn btn-info ml-5" href="logout.php" style="background-color: #663300;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:#cc6600">Logout</span></a>
				<a class="btn btn-info ml-2" href="view_car.php" style="background-color: #663300;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:#cc6600">Back</span></a>

			</div>


				
	

				
			</div>
		</div>
	</div>
	

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>




