<!DOCTYPE html>
<html lang="en">
  <head>

     <link rel="stylesheet" type="text/css" href="main1.css">

  </head>
<body>
 
<div class="header">
  <div class="inner-header">
  <div class="logo"><a href="index.html">RoamUdaipur.com</a></div>
 <!-- <div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>-->
  <div class="header-link"><Button id="login" onclick="openCont()">Contents</Button></div>
  <!--<div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
  <div class="header-link"><a id="login" href="home.html">Home</a></div>
  </div>
  </div>
<div>
  <img src="1.jpg" alt="" class="slideshow">
  <img src="2.jpg" alt="" class="slideshow" >
  <img src="7.jpg" alt="" class="slideshow" >
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
         else if(targo.id=="rbu")
         {
      var x=document.getElementById('myDIV3');
         }
         else if(targo.id=="llv")
         {
      var x=document.getElementById('myDIV4');
         }
         else if(targo.id=="lpu")
         {
      var x=document.getElementById('myDIV5');
         }
         else if(targo.id=="ou")
         {
      var x=document.getElementById('myDIV6');
         }
         else if(targo.id=="th")
         {
      var x=document.getElementById('myDIV7');
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
          <i><a href="airways.php">Airways</a></i>
            <i><a href="railways.php">Railways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Hotels</h2></div>
<div id="searched">
<ul id="myUL" type="none">
 <li><h4 id="fgh" onclick="myFunctio(event)">Hotel Fateh Garh Udaipur - A Heritage Renaissance Resort</h4>
<div id="myDIV" style="display:none">
<b>Address:</b><p>Sisarma, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p> 086969 45109</p>
</div></li>
<li><h4 id="rpp" onclick="myFunctio(event)">Hotel Ram Pratap Palace</h4>
<div id="myDIV1" style="display:none">
<b>Address:</b><p> No.5-B, Alkapuri , Fateh Sagar Lake, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p> 0294 243 1701</p>
</div></li>
<li><h4 id="lp" onclick="myFunctio(event)">Lake Palace</h4>
<div id="myDIV2" style="display:none">
<b>Address:</b><p> Pichola, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p> 0294 242 8800<p>
</div></li>
<li><h4 id="rbu" onclick="myFunctio(event)">Radisson Blu Udaipur Palace Resort & Spa</h4>
<div id="myDIV3" style="display:none">
<b>Address:</b><p> B-1, Near Fateh Sagar Lake, Ambamata, Udaipur, Rajasthan 313001</p>
<b>Phone:</b> <p>0294 305 0000</p>
</div></li>
<li><h4 id="llv" onclick="myFunctio(event)">The Lalit Laxmi Vilas Palace Udaipur</h4>
<div id="myDIV4" style="display:none">
<b>Address:</b><p> Opposite Fateh Sagar Lake, Udaipur, Rajasthan 313004</p>
<b>Phone:</b><p> 0294 301 7777</p>
</div></li>
<li><h4  id="lpu" onclick="myFunctio(event)">The Leela Palace Udaipur</h4>
<div id="myDIV5" style="display:none">
 <b>Address:</b><p> Lake Pichola, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p> 0294 670 1234</p>
</div></li>
<li><h4 id="ou" onclick="myFunctio(event)">The Oberoi Udaivilas</h4>
<div id="myDIV6" style="display:none">
<b>Address:</b><p> Haridasji Ki Magri, Pichola, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p> 0294 243 3300</p>
</div></li>
<li><h4 id="th" onclick="myFunctio(event)">Trident Hotel</h4>
<div id="myDIV7" style="display:none">
<b>Address:</b><p> Near Lake Pichola, Pichola, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p> 0294 243 2200</p>
</div></li>
</ul>
</div>
<footer>
<div class="container" >
<p style="text-align:center; padding:20px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
</body>
</html>
