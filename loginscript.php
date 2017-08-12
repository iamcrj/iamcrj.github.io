<?php
session_start();

$con=mysqli_connect('localhost','root','','users');

if(isset($_POST['submit']))
{
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=$_POST['dob'];
$query1="SELECT * FROM users.users_data WHERE username='$username' AND password='$password'";
$data=mysqli_query($con,$query1);
if(mysqli_num_rows($data)==1)
{
$row = mysqli_fetch_array($data);
$_SESSION['id']=$row['id'];
$_SESSION['username'] = $row['username'];
setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));
header('location:home.php');
echo 'You are logged in as'.$_SESSION['username'];
}
else
	echo 'Can\'t register. Try later';
}
?>
