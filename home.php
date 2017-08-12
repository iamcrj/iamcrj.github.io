<!DOCTYPE html>
<html>
<head>
    <title>Roam Udaipur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link type="text/css" href="index_css.css" rel="stylesheet" >
</head>
<body>
<div class="header">
<div class="inner-header">
<div class="logo"><a href="home.php">RoamUdaipur.com</a></div>
<!--<div class="header-link"><a href="logoutscript.php" id="login">Log Out</a></div>-->
<div class="header-link"><Button id="login" onclick="openCnt()">Contact Us</Button></div>
<div class="header-link"><Button id="login" onclick="openAbt()">About Us</Button></div>
<!--<div class="header-link"><Button id="login" onclick="openPro()">Profile</Button></div>-->
</div>
</div>
<div id="profile_show" class="profile">
  <a href="javascript:void(0)" class="closebtn" onclick="closePro()">&times;</a>
  <div id="pro_head"><h1>Profile</h1></div>
  <br/><br/>
  <div id="pro_element"><h2>Username:&nbsp; &nbsp;<?php echo $_SESSION['username'];?></h2></div>
  <div id="pro_element1"><h2>E-Mail:&nbsp; &nbsp;<?php
$con=mysqli_connect('localhost','root','','users');
$query="SELECT * FROM users.users_data WHERE username='$name'";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);
echo $row['email'];?></h2></div>
<a style="margin-top:395px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div class="profile" id="about_show">
  <a href="javascript:void(0)" class="closebtn" onclick="closeAbt()">&times;</a>
  <div id="mission"><h2><u>Our Mission</u></h2>
  <p>To Provide a platform which can help tourists as well as localites of Udaipur.</p>
  <br/>
  <br/>
  <h2><u>About</u></h2>
  <p>We are here to provide every possible detail related to Udaipur in the simplest manner. We provide
    complete details of Hotels & Restaurants,Tourism,How To Reach and many more coming soon! We are working
    hard to make sure that the content provided you will be best.</p>
    <a style="margin-top:195px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
</div>
<div id="cnt_show" class="profile">
  <a href="javascript:void(0)" class="closebtn" onclick="closeCnt()">&times;</a>
  <div id="cnto"><h2><u>Contact Us</u></h2>
  <br/>
  <a href="www.fb.com/iamcrj">Facebook</a>
  <a href="www.twitter.com/JainUdr27">Twitter</a>
  <a href="www.instagram.com/iamcrj">Instagram</a>
  <a href="www.chiragjain.udr27@gmail.com">E-mail</a>
  <a href="www.linkedin.com/iamcrj">LinkedIn</a>
  <br/>
  <br/>
  <img src="chirag.jpg" alt="chiragjain" id="imagetag">
  <div id="developer">
    <h2><u>Developed By -</u> </h2>
    <h2>Chirag Jain</h2>
    <p>+91-8290755844</p>
</div>
</div>
</div>
<div class="content">
<div class="banner-image">
<div class="inner-banner-image">

<div class="banner-content">
<h2>Tourism</h2>
<p>See Tourist Places in Udaipur.</p>
<div class="elements"><a id="clicks" href="tourism.php">Click Here</a></div>
</div>
<div class="banner-content2">
<h2>Sell and Buy</h2>
<p>Sell and Buy Prooducts in Udaipur.</p>
<a id="clicks" href="#" onclick="alert('This section is under development');">Click Here</a>
</div>

</div>
</div>
<script type="text/javascript">
function openPro() {
    document.getElementById("profile_show").style.width = "50%";
}

function closePro() {
    document.getElementById("profile_show").style.width = "0";
}
function openAbt() {
    document.getElementById("about_show").style.width = "50%";
}

function closeAbt() {
    document.getElementById("about_show").style.width = "0";
}
function openCnt() {
    document.getElementById("cnt_show").style.width = "50%";
}

function closeCnt() {
    document.getElementById("cnt_show").style.width = "0";
}
</script>
<footer>
<div class="container">
<p style="text-align:center">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
</div>
</body>
</html>
