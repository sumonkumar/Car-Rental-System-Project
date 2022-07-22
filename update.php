<?php 
include('connect.php');

session_start();

$id=$_GET['id'];

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";



if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['update']="true";
}

 ?>