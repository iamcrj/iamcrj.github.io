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
    <img src="railways.jpg" alt="" class="slideshow">
    <img src="railway1.jpg" alt="" class="slideshow" >
    <img src="railway2.jpg" alt="" class="slideshow" >
  </div>
<script>
var si = 0;
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
  <i><a href="temples.php">Temples</a></i>
    <i><a href="museums.php">Museums</a></i>
      <i><a href="2&3star.php">2&3 Star Hotels</a></i>
        <i><a href="restaurants.php">Restaurants</a></i>
          <i><a href="4&5star.php">4&5 Star Hotels</a></i>
            <i><a href="airways.php">Airways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Railways</h2></div>
<div id="searched">
<table id="myTable4">
  <tr class="tr-header">
    <th>Train No.</th>
    <th>Train Name</th>
	<th>Origin</th>
	<th>Destination</th>
	<th>Dep. Time</th>
	<th>Arrival Time</th>
	<th>Distance(KM)</th>
	<th>Travel Time</th>
	<th>Days of Runs</th>
	<th>Remarks</th>

  </tr>
  <tr>
    <td>12315</td>
    <td>Annanya Express</td>
	<td>Sealdah</td>
	<td>Udaipur</td>
	<td>13:10</td>
<td>3:00</td>
<td>2140</td>
<td>3 Days</td>
<td>Thursday</td>
<td>Udaipur on Saturday</td>
  </tr>
  <tr>
    <td>19665 </td>
    <td>Khajuraho-Udaipur Express</td>
	<td>Khajuraho</td>
	<td>Udaipur</td>
	<td>9:10</td>
	<td>6:10</td>
	<td>1092</td>
	<td>2 Days</td>
	<td>Everyday</td>
<td>Via Jaipur</td>
  </tr>
  <tr>
    <td>12963</td>
    <td>Mewar Express</td>
    <td>Delhi(HN)</td>
	<td>Udaipur</td>
	<td>19:05</td>
	<td>7:20</td>
	<td>743</td>
	<td>2 Days</td>
	<td>Everyday</td>
<td>Via-Kota</td>
  </tr>
  <tr>
    <td>12981</td>
    <td>Chetak Express</td>
	<td>Delhi(SR)</td>
	<td>Udaipur</td>
  <td>19:40</td>
  <td>7:50</td>
  <td>673</td>
  <td>2 Days</td>
  <td>Everyday</td>
<td>Via-Ajmer</td>

  </tr>
   <tr>
    <td>12995</td>
    <td>Bandra-Udaipur Express</td>
	<td>Bandra</td>
	<td>Udaipur</td>
	<td>15:45</td>
	<td>8:55</td>
	<td>945</td>
	<td>2 Days</td>
	<td>Wed,Fri,Sun</td>
	<td>-</td>
  </tr>
   <tr>
    <td>19659</td>
    <td>Shalimar-Udaipur Express</td>
	<td>Shalimar</td>
	<td>Udaipur</td>
	<td>20:25</td>
	<td>8:55</td>
	<td>1885</td>
	<td>3 Days</td>
	<td>Sunday</td>
	<td>Reach Udaipur on Tues</td>
  </tr>
   <tr>
    <td>9721</td>
    <td>Jaipur-Udaipur Express Holiday Special</td>
	<td>Jaipur</td>
	<td>Udaipur</td>
	<td>6:45</td>
	<td>13:45</td>
	<td>430</td>
	<td>1 Day</td>
	<td>Everyday</td>
	<td>-</td>
  </tr>
   <tr>
    <td>22901</td>
    <td>Udaipur-Bandra Superfast</td>
	<td>Bandra</td>
	<td>Udaipur</td>
	<td>23:45</td>
	<td>16:30</td>
	<td>945</td>
	<td>2 Days</td>
	<td>Tue,Thu,Sat</td>
	<td>-</td>

  </tr>
   <tr>
    <td>19329</td>
    <td>Udaipur-Indore Express</td>
	<td>Indore</td>
	<td>Udaipur</td>
	<td>8:05</td>
	<td>19:00</td>
	<td>479</td>
	<td>1 Day</td>
	<td>Everyday</td>
	<td>-</td>

  </tr>
   <tr>
    <td>12992</td>
    <td>Jaipur-Udaipur Express</td>
  <td>Jaipur</td>
  <td>Udaipur</td>
  <td>14:00</td>
  <td>21:30</td>
  <td>435</td>
  <td>1 Day</td>
  <td>Everyday</td>
  <td>-</td>
  </tr>
   <tr>
    <td>52928</td>
    <td>Mewar Fast Passengers</td>
<td>Ahmedabad</td>
	<td>Udaipur</td>
	<td>7:10</td>
	<td>19:00</td>
	<td>298</td>
	<td>1 Day</td>
	<td>Everyday</td>
	<td>-</td>
	</tr>
   <tr>
    <td>19944</td>
    <td>Ahmedabad-Udaipur Express</td>
 <td>Ahmedabad</td>
  <td>Udaipur</td>
  <td>23:00</td>
  <td>9:20</td>
  <td>298</td>
  <td>2 Days</td>
  <td>Everyday</td>
  <td>-</td>
 </tr>
</table>
</div>
<footer>
<div class="container" >
<p style="text-align:center; padding:15px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
