<?php 
include('connect.php');

session_start();

$carname=$_POST['carname'];
$carno=$_POST['carno'];
$carvalue=$_POST['carvalue'];
$ecapacity=$_POST['ecapacity'];
$pcapacity=$_POST['pcapacity'];

// if($_FILES["image"]["error"]===4)
// {
// 	echo
// 	"<script> alert('Image doesn't exist'); </script>"
// 	;
// }
// else
// {
// 	$fileName=$_FILES["image"]["name"];
// 	$fileSize=$_FILES["image"]["size"];
// 	$tempName=$_FILES["image"]["tmp_name"];
// 	$tempName=$_FILES["image"]["tmp_name"];

// 	$validImageExtension=['.jpg', '.jpeg', '.png'];
// 	$imageExtension=explode('.', $fileName);
// 	$imageExtension=strtolower(end($imageExtension));
// 	if (!in_array($imageExtension, $validImageExtension)) {
// 		echo
// 		"<script> alert('Invalid image extension'); </script>"
// 		;
// 	}
// 	else if ($fileSize>1000000) {
// 		echo
// 		"<script> alert('Image size is too large); </script>"
// 		;
// 	}
// 	else
// 	{
// 		$newImageName=uniqid();
// 		$newImageName .='.'.$imageExtension;

// 		move_uploaded_file($tempName, 'img/'.$newImageName);
// 	}
// }

$sql="INSERT INTO add_car VALUES ('','$carname','$carno','$carvalue','$ecapacity','$pcapacity')";

if (mysqli_query($conn,$sql)) {
	
	header('location: view_car.php');
	$_SESSION['add']="true";
}

else{
	header('location: view_car.php');
	$_SESSION['er_add']="true";
}

 ?>