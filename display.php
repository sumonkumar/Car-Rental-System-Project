<?php 
include('connect.php');
session_start();
if (!isset($_SESSION['ad_login'])) {
	header('location: index.php');

	$_SESSION['plz_login']="true";
}


$sql="SELECT* FROM users";
$result=mysqli_query($conn,$sql);

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<style>
	body{
		background-color: lightgreen;
	}
</style>
<body>

	<div class="container ">

	<div class="row">
		<div class="col-md-12 mt-2">
				<?php if (isset($_SESSION['update'])) {?>
				<div class="alert alert-success">
					Update Successfully!!
				</div>
			
			<?php } ?>

				<?php if (isset($_SESSION['delete'])) {?>
				<div class="alert alert-success">
					Data has been deleted Successfully!!
				</div>
			
			<?php } ?>
			<div class="">
				<a class="btn btn-info mt-2" href="logout.php" style="background-color: #663300;margin-left:1000px;border:3px  solid white; width:100px;  border-radius: 10px 10px 10px 10px; "><span class="" style="font-size: 20px;font-weight:bold;color:#cc6600">Logout</span></a>
			</div>

			<div class="header bg-white mt-2" style="height:80px;border:4px  solid green; ">
					<h1 class="text-center text-uppercase" style="color:#4d2600;font-size: 55px ">USER LIST</h1>
			</div>


			<table class="table table-bordered table-striped mt-3">
				<tr>
					<th>SERIAL NUMBER</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>Phone no</th>
					<th>Action </th>
				</tr>

				<?php 
				while ($row=mysqli_fetch_assoc($result)) {?>


				<tr>
					<td><?=$row['id'] ; ?></td>
					<td><?=$row['name'] ; ?></td>
					<td><?=$row['email'] ; ?></td>
					<td><?=$row['phone'] ; ?></td>
					<td>
						<a class="btn text-white" style="background-color: #663300;border:3px  solid white; border-radius: 10px 10px 10px 10px;" href="view.php?id=<?=$row['id']?>" >View</a>

						<a class="btn text-white" style="background-color: #663300;border:3px  solid white; border-radius: 10px 10px 10px 10px;" href="edit.php?id=<?=$row['id']?>" >Edit</a>

						<a class="btn text-white" style="background-color: #663300;border:3px  solid white; border-radius: 10px 10px 10px 10px;" onclick="return confirm('Are you Sure delete this user ??')" href="delete.php?id=<?=$row['id'] ; ?>" title="">Delete</a>

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
unset($_SESSION['update']);
unset($_SESSION['delete']);
 ?>


</body>
</html>