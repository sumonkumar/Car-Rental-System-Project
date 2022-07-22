<?php 
include('connect.php');

session_start();

$name=$_POST['name'];
$password=$_POST['password'];

$password=md5($password);

$sql="SELECT* FROM admin WHERE name='$name' AND password='$password'";

$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	header('location: admin_con.php');
	$_SESSION['ad_login']="true";


}else{
	header('location: admin_login.php');

	$_SESSION['ad_er_login']="true";
}

 ?>