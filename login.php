<?php
$con=mysqli_connect('localhost','root','','users');
if(isset($_POST['submit']))
{
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=$_POST['dob'];
$query1="SELECT * FROM users.users_data WHERE username='$username' AND password='$password'";
$data=mysqli_query($con,$query1);
if(mysqli_num_rows($data)==1)
{
	$row=mysqli_fetch_array($data);
	echo $row['username'];
	echo $row['password'];
}
else
	echo 'Can\'t register. Try later';
}
?>
