<!DOCTYPE html>
<html>
<head>
<title>Roam Udaipur</title>
<link href="main.css" rel="stylesheet" />
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location:home.php');
}
?>
<div class="header">
<div class="inner-header">
<div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
<div class="header-link"><Button id="login" onClick="signup()">Sign up</Button></div>
<div class="header-link"><Button id="login" onClick="login()">Login</Button></div>
</div>
</div>
<?php
$con=mysqli_connect('localhost','root','','users');
if(isset($_POST['submit']))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=$_POST['password'];
	$email=$_POST['email'];
	$query="SELECT * FROM users.users_data WHERE username='$username'";
	$data1=mysqli_query($con,$query);
	if(mysqli_num_rows($data1)>0)
	{
		echo 'Username exists.Choose Other.';
	}
	else
	{
	$query1="INSERT INTO users.users_data (username,password,email) VALUES ('$username','$password','$email')";
	$data=mysqli_query($con,$query1);
	echo 'Registered. Login Now';
	}
}
?>