<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="main1.css">
	</head>
 <body>
   
   <div class="header">
     <div class="inner-header">
     <div class="logo"><a href="index.html">RoamUdaipur.com</a></div>
   <!--  <div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>-->
      <div class="header-link"><Button id="login" onclick="openCont()">Contents</Button></div>
    <!-- <div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
     <div class="header-link"><a id="login" href="home.html">Home</a></div>
     </div>
     </div>
   <div>
     <img src="9.jpg" alt="" class="slideshow">
     <img src="10.jpg" alt="" class="slideshow" >
     <img src="11.jpg" alt="" class="slideshow" >
   </div>
  <script>
  var slideIndex = 0;
  carousel();
  function carousel() {
      var i;
      var x = document.getElementsByClassName("slideshow");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 2000);
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
        <i><a href="railways.php">Railways</a></i>
          <i><a href="restaurants.php">Restaurants</a></i>
            <i><a href="4&5star.php">4&5 Star Hotels</a></i>
              <i><a href="airways.php">Airways</a></i>
  <a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
  </div>
<div id="jkk"><h2>Hotels</h2></div>
<div id="searched">
<ul id="myUL" type="none">
 <li><h4 id="fgh" onclick="myFunctio(event)">Amantra Comfort Hotel</h4>
<div id="myDIV" style="display:none">
 <b>Address:</b><p>5-B, Opposite Sahelion Ki Bari, New Fatehpura, Udaipur, Rajasthan 313001</p>
 <b>Phone:</b><p>80033 31188</p>
</div></li>
<li><h4  id="rpp" onclick="myFunctio(event)">Amar Kothi Hotel</h4>
<div id="myDIV1" style="display:none">
 <b>Address:</b><p>5-C, Haridasji Ki Magri, Trident-Udaivilas Road, Mulla Talai, Udaipur, Rajasthan 313001</p><b>Phone:</b><p>094144 71020</p>
</div></li>
<li><h4 id="lp" onclick="myFunctio(event)">Heritage Resort</h4>
<div id="myDIV2" style="display:none">
 <b>Address:</b><p>Lake Bagela, Nagda, Eklingji, Udaipur, Rajasthan 313002
 </p><b>Phone:</b><p>094141 62133</p>
</div></li>
<li><h4 id="rbu" onclick="myFunctio(event)">Hotel Rajdarshan</h4>
<div id="myDIV3" style="display:none">
 <b>Address:</b><p>18, Pannadhai Marg, Hathipole, Udaipur, Rajasthan 313001</p>
 <b>Phone:</b><p> 0294 252 6601</p>
</div></li>
<li><h4 id="llv" onclick="myFunctio(event)">Hotel Ram Pratap Palace</h4>
<div id="myDIV4" style="display:none">
 <b>Address:</b><p>No.5-B, Alkapuri , Fateh Sagar Lake, Udaipur, Rajasthan 313001</p><b>Phone:</b><p>
 0294 243 1701</p>
</div></li>
<li><h4 id="lpu" onclick="myFunctio(event)">Rangniwas Palace Hotel</h4>
<div id="myDIV5" style="display:none">
 <b>Address:</b><p>Lake Palace Rd, Udaipur, Rajasthan 313001</p><b>Phone:</b><p>
 0294 252 3890</p>
</div></li>
<li><h4 id="ou" onclick="myFunctio(event)">Ambavgarh Retreat</h4>
<div id="myDIV6" style="display:none">
 <b>Address:</b><p>46, Ambavgarh Retreat , Near Fateh Sagar Lake, Udaipur, Rajasthan 313001</p><b>Phone:</b><p>
 094140 24622</p>
</div></li>
<li><h4 id="th" onclick="myFunctio(event)">Hotel Krishna Niwas</h4>
<div id="myDIV7" style="display:none">
 <b>Address:</b><p>No:34-35, Lal Ghat, Behind Jagdish Temple, Udaipur, Rajasthan 313001</p><b>Phone:</b><p>
0294 242 0163</p>
</div></li>
<li><h4 id="ah" onclick="myFunctio(event)">Alka Hotel</h4>
<div id="myDIV8" style="display:none">
<b>Address:</b><p>Alka Hotel Road, Shastri Circle, NA, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p>0294 242 7981</p>
</div></li>
<li><h4 id="hhl" onclick="myFunctio(event)">Hotel Hill Lake</h4>
<div id="myDIV9" style="display:none">
<b>Address:</b><p>Purohit Ji Ka Khurra,, Chandpole, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p>078771 54820</p>
</div></li>
<li><h4 id="hs" onclick="myFunctio(event)">Hotel Sarovar</h4>
<div id="myDIV10" style="display:none">
 <b>Address:</b><p>Pichola Lake, Hauman Ghat, Outside Chandpole, Udaipur, Rajasthan 313001</p>
 <b>Phone:</b><p>0294 243 2801</p>
</div></li>
<li><h4  id="hrp" onclick="myFunctio(event)">Hotel Ram Pratap Palace</h4>
<div id="myDIV11" style="display:none">
<b>Address:</b><p>No.5-B, Alkapuri , Fateh Sagar Lake, Udaipur, Rajasthan 313001</p>
<b>Phone:</b><p>0294 243 1701</p>
</div></li>
</ul>
</div>
<script>
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
			   else if(targo.id=="ah")
		     {
			var x=document.getElementById('myDIV8');
		     }
			   else if(targo.id=="hhl")
		     {
			var x=document.getElementById('myDIV9');
		     }
			   else if(targo.id=="hs")
		     {
			var x=document.getElementById('myDIV10');
		     }
			   else if(targo.id=="hrp")
		     {
			var x=document.getElementById('myDIV11');
		     }
			   else if(targo.id=="fj")
		     {
			var x=document.getElementById('myDIV12');
		     }

          if (x.style.display === 'none')
		  {
            x.style.display = 'block';
          }
		  else {
            x.style.display = 'none';
              }

	}
</script>
<footer>
<div class="container" >
<p style="text-align:center; padding:20px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
</body>
</html>
