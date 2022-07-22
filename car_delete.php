<?php 

include('connect.php');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM add_car WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: view_car.php');

	$_SESSION['delete']="true";
}

 ?>