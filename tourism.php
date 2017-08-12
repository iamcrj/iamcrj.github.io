<!DOCTYPE html>
<html>
  <head>
  <title>Roam Udaipur</title>
	<link rel="stylesheet" type="text/css" href="indexkicss.css" >
 </head>
<body>
  <div class="header">
  <div class="inner-header">
  <div class="logo"><a href="roamudaipur.html">RoamUdaipur.com</a></div>
<!--<div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>-->
<div class="header-link"><a id="login" href="#" onclick="alert('This section is under development');">S & B</a></div>
  <!--<div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
  <div class="header-link"><a id="login" href="home.html">Home</a></div>
  </div>
  </div>
  <div id="profile_show" class="profile">
    <a href="javascript:void(0)" class="closebtn" onclick="closeProfile()">&times;</a>
    <div id="pro_head"><h1>Profile</h1></div>
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
  <div class="profile" id="places_show">
    <a href="javascript:void(0)" class="closebtn" onclick="closePro()">&times;</a>
    <div id="mission"><h2><u>Places to See</u></h2>
    <br/>
    <br/>
    <i><a href="lakes.php">Lakes</a></i>
    <i><a href="museums.php">Museums</a></i>
    <i><a href="temples.php">Temples</a></i>
    <a style="margin-top:95px; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
  </div>
  </div>
  <div class="profile" id="food_show">
    <a href="javascript:void(0)" class="closebtn" onclick="closeFood()">&times;</a>
    <div id="mission"><h2><u>Hotels & Restaurants</u></h2>
    <br/>
    <br/>
  <i><a href="4&5star.php">4 & 5 Star</a></i>
  <i><a href="2&3star.php">2 & 3 Star</a></i>
  <i><a href="restaurants.php">Restaurants</a></i>
    <a style="margin-top:95px; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
  </div>
  </div>
  <div class="profile" id="reach_show">
    <a href="javascript:void(0)" class="closebtn" onclick="closeReach()">&times;</a>
    <div id="mission"><h2><u>How to Reach</u></h2>
    <br/>
    <br/>
    <i><a href="airways.php">Airways</a></i>
    <i><a href="railways.php">Railways</a></i>
    <i><a href="#" onclick="alert('This section is not ready yet. We will notify you once we are ready.');">Roadways</a></i>
    <a style="margin-top:95px; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
  </div>
  </div>
  <div class="content">
  <div class="banner-image">
  <div class="inner-banner-image">

  <div class="banner-content">
  <h2>Places To See</h2>
  <p><i>"Tourist Destinations in Udaipur.</i></p>
  <div class="elements"><Button id="clicks" onclick="openPro()">Click Here</Button></div>
  </div>
  <div class="banner-content2">
  <h2>Food</h2>
  <p><i>"Best Restaurants and Hotels.</i></p>
  <Button id="clicks" onclick="openFood()">Click Here</Button>
  </div>
  <div class="banner-content3">
  <h2>How to Reach</h2>
  <p><i>"Railways and Airways.</i></p>
  <Button id="clicks" onclick="openReach()">Click Here</Button>
  </div>
  </div>
  </div>
  <div id="abt">
  <h2 style="padding:10px;"><u>About Udaipur</u></h2>
<p style="color:black; padding:15px;">Udaipur is a beautiful city in the Indian State of Rajasthan. The master piece of the city is the floating lake palace in Lake Pichola. Udaipur is also well
connected to the major cities of India by land, rail or air. Because of its picturesque and scenic locations, Udaipur has been the shooting location for many
Hollywood and Bolllywood movies. Udaipur is a popular tourist destination in India. It is also known as the City of Lakes. The Pichola lake, Fateh Sagar Lake,
Udai Sagar and Swaroop Sagar in this city are considered some of the most beautiful lakes in the state.
</p>
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
function openPro() {
    document.getElementById("places_show").style.width = "50%";
}

function closePro() {
    document.getElementById("places_show").style.width = "0";
}
function openFood() {
    document.getElementById("food_show").style.width = "50%";
}

function closeFood() {
    document.getElementById("food_show").style.width = "0";
}
function openReach() {
    document.getElementById("reach_show").style.width = "50%";
}

function closeReach() {
    document.getElementById("reach_show").style.width = "0";
}
function alert_show()
{
  alert("This portion is not ready yet. You will be notified when we are ready");
}
</script>
</body>
</html>
