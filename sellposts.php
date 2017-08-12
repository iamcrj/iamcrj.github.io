<!DOCTYPE html>
<html>
  <head>
  <title>Roam Udaipur</title>
	<link rel="stylesheet" type="text/css" href="olx_style.css" >
 </head>
<body>
  <?php
  session_start();
  define('TIMEZONE', 'Asia/Kolkata');
  date_default_timezone_set(TIMEZONE);

  $name=$_SESSION['username'];

  function time_elapsed_string($ptime)
  {
  $seconds_ago = (time() - strtotime($ptime));
  if ($seconds_ago >= 31536000) {
      echo "Posted " . intval($seconds_ago / 31536000) . " years ago";
  } elseif ($seconds_ago >= 2419200) {
      echo "Posted " . intval($seconds_ago / 2419200) . " months ago";
  } elseif ($seconds_ago >= 86400) {
      echo "Posted " . intval($seconds_ago / 86400) . " days ago";
  } elseif ($seconds_ago >= 3600) {
      echo "Posted " . intval($seconds_ago / 3600) . " hours ago";
  } elseif ($seconds_ago >= 60) {
      echo "Posted " . intval($seconds_ago / 60) . " minutes ago";
  } else {
      echo "Posted less than a minute ago";
  }
}
 ?>
<div class="header">
  <div class="inner-header">
  <div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
<div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>
<div class="header-link"><a id="login" href="olx.php">S&B</a></div>
  <div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>
  <div class="header-link"><a id="login" href="olx.php">Home</a></div>
  </div>
  </div>
  <?php
$con=mysqli_connect('localhost','root','','users');

$query="SELECT username,description,Address,numbers,post_time FROM users.posts_sell INNER JOIN users_data ON user_id=id ORDER BY post_time DESC";
$data=mysqli_query($con,$query);?>
<div id="elements">
<?php while($row=mysqli_fetch_array($data))
{
  ?>
  <div id="element">
  <h3><?php echo $row['username'];?></h3><p style="color:black; margin-top:0;"><?php echo  time_elapsed_string($row['post_time']);?></p>
<p style="color:black;"><b><?php echo $row['description'];?></b></p>
<p style="color:black;"><?php echo $row['Address'];?></p>
<p style="color:black;"><?php echo $row['numbers'];?></p>
<button type="button" id="clicks1" name="button">Like</button>
<button type="button" id="clicks2" name="button" onclick="alert('Sorry,For Comments you have to wait! Be Patient');">Comment</button>
</div>
    <br/>
    <?php
}
?>
</div>
