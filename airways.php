<!DOCTYPE html>
<html lang="en">
  <head>
 <link rel="stylesheet" type="text/css" href="main1.css">
	</head>
	 <body>
    
     <div class="header">
       <div class="inner-header">
       <div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
<!--       <div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>-->
       <div class="header-link"><Button id="login" onclick="openCont()">Contents</Button></div>
    <!--   <div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
     <div class="header-link"><a id="login" href="home.html">Home</a></div>
       </div>
       </div>
     <div>
       <img src="indigo.jpg" alt="" class="slideshow">
       <img src="jet.jpg" alt="" class="slideshow" >
       <img src="airindia.jpg" alt="" class="slideshow" >
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
function myFunctio(event)
 {
	 var targo=event.target;
	 if(targo.id=="fgh")
	 {var x = document.getElementById('myDIV');
	 }
		  else if(targo.id=="rpp")
		     {
			var x=document.getElementById('myDIV1');
		     }
			  else if(targo.id=="lp")
		     {
			var x=document.getElementById('myDIV2');
		     }
         if (x.style.display === 'none')
    {
           x.style.display = 'block';
         }
    else {
           x.style.display = 'none';
             }
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
            <i><a href="railways.php">Railways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Airways</h2></div>
<div id="searched">
<ul id="myUL" type="none">
<li><h4 id="fgh" onclick="myFunctio(event)">Mumbai-Udaipur</h4>
<div id="myDIV" style="display:none">
<table id="myTable1">
  <tr class="tr-header">
    <th style="width:60%;">Flight</th>
    <th style="width:40%;">Flight No.</th>
	<th style="width:40%;">Departure</th>
	<th style="width:40%;">Arrival</th>
  </tr>
  <tr>
    <td>Jet Airways</td>
    <td>9W2093</td>
	<td>05:10</td>
	<td>06:30</td>
  </tr>
  <tr>
    <td>Indigo</td>
    <td>6E-749</td>
	<td>12:15</td>
	<td>13:40</td>
  </tr>
  <tr>
    <td>Air India</td>
    <td>AI-643</td>
	<td>14:10</td>
	<td>15:45</td>
  </tr>
  <tr>
    <td>Jet Airways</td>
    <td>9W-2073</td>
	<td>18:40</td>
	<td>20:00</td>
  </tr>
  <tr>
    <td>Indigo</td>
    <td>6E-764</td>
	<td>17:20</td>
	<td>18:50</td>
  </tr>
</table>
</div></li>
<li><h4 id="rpp" onclick="myFunctio(event)">Delhi-Udaipur</h4>
  <div id="myDIV1" style="display:none">

<table id="myTable2">
  <tr class="tr-header">
    <th style="width:60%;">Flight</th>
    <th style="width:40%;">Flight No.</th>
	<th style="width:40%;">Departure</th>
	<th style="width:40%;">Arrival</th>
  </tr>
  <tr>
    <td>Jet Airways</td>
    <td>9W 824</td>
	<td>11:20</td>
	<td>12:30</td>
  </tr>
  <tr>
    <td>Indigo</td>
    <td>6E-746</td>
	<td>07:40</td>
	<td>09:10</td>
  </tr>
  <tr>
    <td>Indigo</td>
    <td>6E-751</td>
	<td>13:25</td>
	<td>14:35</td>
  </tr>
  <tr>
    <td>Air India</td>
    <td>AI-471</td>
	<td>13:25</td>
	<td>14:35</td>
  </tr>
  <tr>
    <td>Spice Jet(via Jaipur) </td>
    <td>SG 2623</td>
	<td>07:20</td>
	<td>09:25</td>
  </tr>
</table>
</div></li>
<li><h4 id="lp" onclick="myFunctio(event)">Jaipur-Udaipur</h4>
   <div id="myDIV2" style="display:none">

<table id="myTable3">
  <tr class="tr-header">
    <th style="width:60%;">Flight</th>
    <th style="width:40%;">Flight No.</th>
	<th style="width:40%;">Departure</th>
	<th style="width:40%;">Arrival</th>
  </tr>
  <tr>
    <td>Spice Jet</td>
    <td>SG 2623</td>
	<td>08:35</td>
	<td>09:30</td>
  </tr>
 </table>
</div></li>
</ul>
</div>
<footer>
<div class="container" >
<p style="text-align:center; padding:15px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
</body>
