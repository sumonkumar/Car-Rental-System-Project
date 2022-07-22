<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Signup</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>


<script>
function validateForm() {
  let n = document.forms["myForm"]["name"].value;
  let e = document.forms["myForm"]["email"].value;
  let p = document.forms["myForm"]["phone"].value;
  let pa = document.forms["myForm"]["password"].value;

  if (n == "") {
    alert("Name must be filled out");
    return false;
  }
  if (e == "") {
    alert("Email must be filled out");
    return false;
  }
  if (p == "") {
    alert("Phone must be filled out");
    return false;
  }
  if (pa == "") {
    alert("Password must be filled out");
    return false;
  }
}
</script>

<body>
	

<div class="container-fluid">

	<div class="row bg-dark mx-auto" style="height: 700px;">
		<div class="col-md-12 d-flex">
	
			<?php 
			if (isset($_SESSION['er_signup'])) {?>
				<div class="alert alert-success">
					Signup not Successfully!!
				</div>
			
			<?php } ?>	

				<div class="left col-md-9 mt-5">
					<form action="confirm_signup.php" name ="myForm" onsubmit="return validateForm()" method="post" class="mt-5" style="height:350px;width:500px;margin-left: 350px;" >
				<h1 class="text-center text-uppercase text-danger">User Sign up form</h1>
				
				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="name" placeholder="Enter Your Name">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px"   type="email" name="email" placeholder="Enter Your Email Address">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="phone" placeholder="Enter Your Phone No">

				<input class="form-control mt-4" style="border:1px  solid blue; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px"   type="password" name="password" minlength="5" placeholder="Enter Your Password">
				
								
				<input class="btn btn-success mt-4"style="border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px" type="submit" value="Signup">
				<a href="user.php" class="btn btn-danger mt-4"style="border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px">Back</a>
				

			</form>
				</div>


		</div>
	</div>
</div>






<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php 

unset($_SESSION['er_signup']);
 ?>
</body>
</html>