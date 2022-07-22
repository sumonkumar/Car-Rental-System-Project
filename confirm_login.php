<?php 
include('connect.php');

session_start();

$name=$_POST['name'];
$password=$_POST['password'];

$password=md5($password);

$sql="SELECT* FROM users WHERE name='$name' AND password='$password'";

$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	header('location: user_home.php');
	$_SESSION['login']="true";

}else{
	header('location: login.php');

	$_SESSION['er_login']="true";
}

 ?>