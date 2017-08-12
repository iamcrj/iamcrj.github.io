<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="main1.css">
</head>

<body>
  
<div class="header">
  <div class="inner-header">
  <div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
  <!--<div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>-->
  <div class="header-link"><Button id="login" onclick="openCont()">Contents</Button></div>
  <!--<div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
  <div class="header-link"><a id="login" href="home.html">Home</a></div>
  </div>
  </div>
<div>
  <img src="jagd.jpg" alt="" class="slideshow">
  <img src="karnim.jpg" alt="" class="slideshow" >
  <img src="neem.jpg" alt="" class="slideshow" >
</div>
<script>var si = 0;
slides();
function slides() {
    var i;
    var x = document.getElementsByClassName("slideshow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    si++;
    if (si > x.length) {si = 1}
    x[si-1].style.display = "block";
    setTimeout(slides, 2000);
}
function openProfile() {
    document.getElementById("profile_show").style.width = "50%";
}

function closeProfile() {
    document.getElementById("profile_show").style.width = "0";
}
function openCont() {
    document.getElementById("contents_show").style.width = "50%";
}

function closeCont() {
    document.getElementById("contents_show").style.width = "0";
}
</script>
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
  <a style="margin-top:295px; font-size:16px; text-align:center; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div class="profile" id="contents_show">
  <a href="javascript:void(0)" class="closebtn" onclick="closeCont()">&times;</a>
    <h2 style="text-align:center;"><u>Contents</u></h2>
    <br/>
    <br/>
  <i><a href="lakes.php">Lakes</a></i>
  <i><a href="museums.php">Museums</a></i>
    <i><a href="4&5star.php">4&5 Star Hotels</a></i>
      <i><a href="2&3star.php">2&3 Star Hotels</a></i>
        <i><a href="restaurants.php">Restaurants</a></i>
          <i><a href="airways.php">Airways</a></i>
            <i><a href="railways.php">Railways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Temples</h2></div>
<div id="searched" style="border:none; height:600px;">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'fs')" id="defaultOpen">Neemach Mata Temle</button>
  <button class="tablinks" onclick="openCity(event, 'pl')">Karni Mata Temple</button>
 <button class="tablinks" onclick="openCity(event, 'us')">Jagdish Temple</button>

 </div>

<div id="fs" class="tabcontent">
<h3>Neemach Mata Temple</h3>
<img src="neem.jpg" style="width:80%; height:50%;">
<p>Neemach Mata Temple is located on a hill on the banks of the Fateh Sagar Lake in the city of Udaipur, Rajasthan. This temple is located on a green hill
in the Dewali area of Udaipur. It has both stairs and uphill slope walk way to climb, which is around 900 metres long. It enshrines the stone idol of
Neemach Mata Devi. There is also an idol of Lord Ganesh and three west-facing lions of stone.One can have very beautiful view of whole city and its lakes
from the temple as well as while climbing. The walk is pollution-free as no vehicles can enter in the hill boundary.</p>
</div>

<div id="pl" class="tabcontent">
<h3>Karni Mata Temple</h3>
<img src="karnim.jpg" style="width:80%; height:50%;">
<p>Another dedicated temple is Shri Manshapurna Karni Mata Temple or Karni Mata, Udaipur, located on the Machla Hills, near
 Pandit Deendayal Upadhyay Park in Udaipur, Rajasthan. One can reach to the temple either by stairs starting from Manikyalal Verma Park or by ropeway.</p>
</div>
<div id="us" class="tabcontent">
<h3>Jagdish Temple</h3>
<img src="jagd.jpg" style="width:80%; height:50%;">
<p>Jagdish Temple is a large Hindu temple in the middle of Udaipur in Rajasthan.
 A big tourist attraction, the temple was originally called the temple of Jagannath Rai but is now called Jagdish-ji. It is a major monument in Udaipur.
 Located in the City Palace complex of Udaipur, this temple is made in the Indo-Aryan style of architecture.</p>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
</div>
<footer>
<div class="container" >
<p style="text-align:center; padding:20px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
