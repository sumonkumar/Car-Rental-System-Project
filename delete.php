<?php 

include('connect.php');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM users WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['delete']="true";
}

 ?>