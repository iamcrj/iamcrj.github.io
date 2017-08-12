<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','users');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM users.users_data WHERE username = '".$q."'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
	echo 'Not available';
}
else
{
	echo 'Available.';
}
?>