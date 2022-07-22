<?php 
include('connect.php');

session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);


$sql="INSERT INTO admin VALUES ('','$name','$email','$password')";

if (mysqli_query($conn,$sql)) {
	
	header('location: admin_login.php');
	$_SESSION['signup']="true";
}

else{
	header('location: admin_signup.php');
	$_SESSION['er_signup']="true";
}

 ?>