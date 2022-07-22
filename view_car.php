

<?php 
include('connect.php');
session_start();
if (!isset($_SESSION['ad_login'])) {
	header('location: index.php');

	$_SESSION['plz_login']="true";
}


$sql="SELECT* FROM add_car";
$result=mysqli_query($conn,$sql);

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View Car</title>
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

	<div class="row">
			<?php 
			if (isset($_SESSION['add'])) {?>
				<div class="alert alert-success">
					Add Car Successfully!
				</div>
			
			<?php } ?>

		    <?php 
			if (isset($_SESSION['er_add'])) {?>
				<div class="alert alert-success">
					Car Not Added!
				</div>
			
			<?php } ?>


		<div class="col-md-12 mt-2">

			<div class="d-flex">
				<a class="btn btn-info ml-auto" href="logout.php" style="background-color: #663300; border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 17px;font-weight:bold;color:#cc6600">Logout</span></a>
				<a class="btn btn-info ml-2" href="add_car.php" style="background-color: #663300;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 17px;font-weight:bold;color:#cc6600">Add Car</span></a>
			</div>



			<div class="header bg-white mt-2" style="height:80px;border:4px  solid green; ">
					<h1 class="text-center text-uppercase" style="color:#4d2600;font-size: 55px ">CAR LIST</h1>
			</div>


			<table class="table table-bordered table-striped mt-3">
				<tr>
					<th>ID</th>
					<th>CAR NAME</th>
					<th>CAR NO</th>
					<th>CAR VALUE</th>
					<th>ENGINE CAPACITY</th>
					<th>PASSENGER CAPACITY</th>
					<th>ACTION </th>
				</tr>

				<?php 
				while ($row=mysqli_fetch_assoc($result)) {?>


				<tr>
					<td><?=$row['id'] ; ?></td>
					<td><?=$row['carname'] ; ?></td>
					<td><?=$row['carno'] ; ?></td>
					<td><?=$row['carvalue'] ; ?></td>
					<td><?=$row['ecapacity'] ; ?></td>
					<td><?=$row['pcapacity'] ; ?></td>
					<td>
						<a class="btn text-white mt-1 mr-2 ml-2" style="background-color: #663300;border:3px  solid white; border-radius: 10px 10px 10px 10px;" href="single_car_view.php?id=<?=$row['id']?>" >View</a>

						<a class="btn text-white mt-1 mr-2" style="background-color: #663300;border:3px  solid white; border-radius: 10px 10px 10px 10px;" href="update_car.php?id=<?=$row['id']?>" >Update</a>

						<a class="btn text-white mt-1" style="background-color: #663300;border:3px  solid white; border-radius: 10px 10px 10px 10px;" onclick="return confirm('Are you Sure delete this ??')" href="car_delete.php?id=<?=$row['id'] ; ?>" title="">Delete</a>

					</td>
				</tr>
				<?php } ?>

		

			</table>
				

				



		</div>
	</div>
</div>






<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php 
unset($_SESSION['add']);
unset($_SESSION['er_add']);
 ?>



</body>
</html>