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

	<div class="row mx-auto bg-primary" style="height:700px;">

			<div class="col-md-12 d-flex">

				<div class="left col-md-9 mt-3">
					<form action="confirm_add_car.php" method="post" enctype="multipart/form-data" class="mt-5" style="height:300px;width:500px;margin-left: 350px;">
				<h1 class="text-center text-uppercase" style="color:#194d19;">Add New Car</h1>
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="carname" placeholder="Enter Car Name">
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px"   type="text" name="carno" placeholder="Enter Car No">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="carvalue" placeholder="Enter Car Value">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="ecapacity" placeholder="Enter Car Engine Capacity">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="pcapacity" placeholder="Enter Car Passenger Capacity">

				<!-- <label for="img" style="margin-left: 57px; margin-top: 10px;">Select image (100 x 100):</label> -->
  				<!-- <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" value="Upload" width="100" height="100" style="margin-left: 57px;"> -->
  				<!-- <input type="file" name="image" accept="image/png,imagge/jpg,image/jpeg"required>
 -->								
				<input class="btn btn-success mt-4"style="background-color: #663300;border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="submit" value="Add">
								

			</form>

				</div>
				</div>

		 	



		</div>
	</div>
</div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>