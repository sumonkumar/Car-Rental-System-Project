<?php 
include('connect.php');

session_start();

$id=$_GET['id'];

$carname=$_POST['carname'];
$carno=$_POST['carno'];
$carvalue=$_POST['carvalue'];
$ecapacity=$_POST['ecapacity'];
$pcapacity=$_POST['pcapacity'];

$sql="UPDATE add_car SET carname='$carname', carno='$carno', carvalue='$carvalue', ecapacity='$ecapacity', pcapacity='$pcapacity' WHERE id=$id";



if (mysqli_query($conn,$sql)) {
	header('location: view_car.php');

	$_SESSION['update']="true";
}

 ?>