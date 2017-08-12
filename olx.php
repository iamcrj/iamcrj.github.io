<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="olx_style.css">
	</head>
 <body>
   <?php
    session_start();
    $name=$_SESSION['username'];
 ?>
   <div class="header">
     <div class="inner-header">
     <div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
     <div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>
      <div class="header-link"><a id="login" href="tourism.php">Tourism</a></div>
     <div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>
     <div class="header-link"><a id="login" href="home.php">Home</a></div>
     </div>
     </div>

     <div id="profile_show" class="profile">
       <a href="javascript:void(0)" class="closebtn"  onclick="closeProfile()">&times;</a>
       <div id="pro_head1"><h1>Profile</h1></div>
       <br/><br/>
       <div id="pro_element"><h2>Username:&nbsp; &nbsp;<?php echo $_SESSION['username'];?></h2></div>
       <div id="pro_element1"><h2>E-Mail:&nbsp; &nbsp;<?php
     $con=mysqli_connect('localhost','root','','users');
     $query="SELECT * FROM users.users_data WHERE username='$name'";
     $data=mysqli_query($con,$query);
     $row=mysqli_fetch_array($data);
     echo $row['email'];?></h2></div>
       <a style="margin-top:295px; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
     </div>

     <div id="rent_show" class="profile" style="background-color:blue;">
       <a href="javascript:void(0)" class="closebtn" onclick="closeRent()">&times;</a>
    <div id="contentform"><div id="pro_head"><i><h1>Rent Post</h1></i></div>
       <br/><br/>
       <form id="form_element" action="olx_header.php" method="post">
         <input  type="text" name="username" value="<?php echo $_SESSION['username'];?>" disabled>
         <br/>
         <textarea placeholder="Description" name="post" rows="3" cols="40" style="margin-top:5px;"></textarea>
         <br/>
<textarea placeholder="Address" name="address" rows="3" cols="40" style="margin-top:5px;"></textarea>
         <br/> <input placeholder="Mobile Number" type="text" name="mob" required>
         </div>
         <input id="submit" type="submit" name="sub1" value="Submit">
       </form>

   </div>
     <div id="sell_show" class="profile" style="background-color:blue;">
       <a href="javascript:void(0)" class="closebtn" onclick="closeSell()">&times;</a>
         <div id="contentform"><div id="pro_head"><i><h1>Sell Post</h1></i></div>
       <br/><br/>
       <form id="form_element" action="olx_header.php" method="post">
         <input type="text" name="username" value="<?php echo $_SESSION['username'];?>" disabled>
         <br/>
         <textarea placeholder="Description" name="post" rows="3" cols="40" style="margin-top:5px;"></textarea>
         <br/>
<textarea placeholder="Address" name="address" rows="3" cols="40" style="margin-top:5px;"></textarea>
         <br/> <input type="text" placeholder="Mobile Number" name="mob" required>
       </div>
         <input id="submit" type="submit" name="sub2" value="Submit">
       </form>
     </div>
     <div id="others_show" class="profile" style="background-color:blue;">
       <a href="javascript:void(0)" class="closebtn" onclick="closeOther()">&times;</a>
       <div id="contentform"><div id="pro_head"><i><h1>Others</h1></i></div>
       <br/><br/>
       <form id="form_element" action="olx_header.php" method="post">
         <input type="text" name="username" value="<?php echo $_SESSION['username'];?>" disabled>
         <br/>
         <textarea placeholder="Description" name="post" rows="3" cols="40" style="margin-top:5px;"></textarea>
         <br/>
<textarea placeholder="Address" name="address" rows="3" cols="40" style="margin-top:5px;"></textarea>
         <br/> <input placeholder="Mobile Number" type="text" name="mob" required>
       </div>
         <input id="submit" type="submit" name="sub3" value="Submit">
       </form>
     </div>


     <div class="content">
     <div class="banner-image">
     <div class="inner-banner-image">

     <div class="banner-content">
     <h2>Rent</h2>
     <p><i>"This section is related to Rent posts.</i></p>
     <Button id="clicks" onclick="openRent()">Create Post</Button>
      <Button id="clicks" onclick="location.href='rentposts.php'">See Posts</Button>
     </div>
     <div class="banner-content2">
     <h2>Sell</h2>
     <p><i>"This section is related to Sell and Buy Posts.</i></p>
     <Button id="clicks" onclick="openSell()">Create Post</Button>
      <Button id="clicks" onclick="location.href='sellposts.php'">See Posts</Button>
     </div>
     <div class="banner-content3">
     <h2>Others</h2>
     <p><i>"Section includes posts related to other facilities.</i></p>
     <Button id="clicks" onclick="openOther()">Create Post</Button>
     <Button id="clicks" onclick="window.location.href='others.php'">See Posts</Button>
     </div>
     </div>
     </div>
</div>
<footer>
<div class="container" >
<p style="text-align:center; padding-top:10px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>

<script type="text/javascript">
function openProfile() {
    document.getElementById("profile_show").style.width = "50%";
}

function closeProfile() {
    document.getElementById("profile_show").style.width = "0";
}
function openRent() {
    document.getElementById("rent_show").style.width = "50%";
}

function closeRent() {
    document.getElementById("rent_show").style.width = "0";
}
function openSell() {
    document.getElementById("sell_show").style.width = "50%";
}

function closeSell() {
    document.getElementById("sell_show").style.width = "0";
}
function openOther() {
    document.getElementById("others_show").style.width = "50%";
}

function closeOther() {
    document.getElementById("others_show").style.width = "0";
}
</script>
