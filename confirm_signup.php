<?php 
include('connect.php');

session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$password=md5($password);


$sql="INSERT INTO users VALUES ('','$name','$email','$phone','$password')";

if (mysqli_query($conn,$sql)) {
	
	header('location: login.php');
	$_SESSION['signup']="true";
}

else{
	header('location: signup.php');
	$_SESSION['er_signup']="true";
}

 ?>