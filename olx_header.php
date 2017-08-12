<?php
session_start();
define('TIMEZONE', 'Asia/Kolkata');
date_default_timezone_set(TIMEZONE);
$don=mysqli_connect('localhost','root','','users') OR die('can\'t connect');
$name=$_SESSION['username'];
if(isset($_POST['sub1']))
{
  $id=$_SESSION['id'];
  $desp=$_POST['post'];
  $numb=$_POST['mob'];
  $created_date = date("Y-m-d H:i:s");
  $address=$_POST['address'];
  $don=mysqli_connect('localhost','root','','users');
 $query3="INSERT INTO users.posts_rent (user_id,description,Address,numbers,post_time) VALUES ('$id','$desp','$address','$numb','$created_date')";
 $data=mysqli_query($don,$query3) OR die('not');
}
if(isset($_POST['sub2']))
{

  $id=$_SESSION['id'];
  $desp=$_POST['post'];
  $numb=$_POST['mob'];
  $created_date = date("Y-m-d H:i:s");
  $address=$_POST['address'];
  $don=mysqli_connect('localhost','root','','users');
 $query3="INSERT INTO users.posts_sell (user_id,description,Address,numbers,post_time) VALUES ('$id','$desp','$address','$numb','$created_date')";
 $data=mysqli_query($don,$query3) OR die('not');
}
if(isset($_POST['sub3']))
{

  $id=$_SESSION['id'];
  $desp=$_POST['post'];
  $numb=$_POST['mob'];
  $created_date = date("Y-m-d H:i:s");
  $address=$_POST['address'];
  $don=mysqli_connect('localhost','root','','users');
 $query3="INSERT INTO users.others (user_id,description,Address,numbers,post_time) VALUES ('$id','$desp','$address','$numb','$created_date')";
 $data=mysqli_query($don,$query3) OR die('not');
}
header('location:olx.php');
?>
