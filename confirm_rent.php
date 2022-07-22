<?php 
include('connect.php');

session_start();

$time1=$_POST['time1'];
// $time2=$_POST['time2'];
$hour=$_POST['hour'];


$sql="INSERT INTO time VALUES ('','$time1','$hour')";

if (mysqli_query($conn,$sql)) {
	
	header('location: final_rent.php');
}

else{
	header('location: rent.php');
}

 ?>