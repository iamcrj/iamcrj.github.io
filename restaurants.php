<!DOCTYPE html>
<html lang="en">
  <head>

     <link rel="stylesheet" type="text/css" href="main1.css">

	  </head>

	  <body>
     
    <div class="header">
      <div class="inner-header">
      <div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
     <!-- <div class="header-link"><a id="login" href="logoutscript.php">Log Out</a></div>-->
      <div class="header-link"><Button id="login" onclick="openCont()">Contents</Button></div>
    <!--  <div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
      <div class="header-link"><a id="login" href="home.html">Home</a></div>
      </div>
      </div>
    <div>
      <img src="13.jpg" alt="" class="slideshow">
      <img src="14.jpg" alt="" class="slideshow" >
      <img src="15.jpg" alt="" class="slideshow" >
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
        <i><a href="airways.php">Airways</a></i>
          <i><a href="4&5star.php">4&5 Star Hotels</a></i>
            <i><a href="railways.php">Railways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Restaurants</h2></div>
<div id="searched">
<ul id="myUL" type="none">
 <li><h4 id="fgh" onclick="myFunctio(event)">Barbeque Nation</h4>
<div id="myDIV" style="display:none">
<b>Address:</b><p>3rd Floor,NH-8,The Celebration Mall Opposite Devendra Dham Bhuwana, Bhuwana,Udaipur,313004</p>
<b>Cuisines:</b><p>0294 694 4544</p>
</div></li>
<li><h4 id="rpp" onclick="myFunctio(event)">Tehkhana Restaurant & Bar</h4>
<div id="myDIV1" style="display:none">
 <b>Address:</b><p>Hitawala Complex - IInd,1/A,Saheli Marg,Opposite Soni Hospital,Panchwati,<br/>Udaipur,313001</p>
 <b>Phone:</b><p>096609 01448</p>
</div></li>
<li><h4 id="lp" onclick="myFunctio(event)">Mathara</h4>
<div id="myDIV2" style="display:none">
<b>Address:</b><p>8th Floor, Lake City Mall, Durga Nursery Road, Udaipur, Rajasthan 313002</p>
<b>Phone:</b><p>099824 30071</p>
</div></li>
<li><h4 id="rbu" onclick="myFunctio(event)">Garden Restaurant</h4>
<div id="myDIV3" style="display:none">
<b>Address:</b><p>Opposite Sajjan Niwas Garden, Gulabh Bagh Road, City Centre, Udaipur</p>
<b>Phone:</b><p>0294 2418881</p>
</div></li>
<li><h4  id="llv" onclick="myFunctio(event)">Delhi Darbar</h4>
<div id="myDIV4" style="display:none">
<b>Address:</b><p>Multi Functional Complex, City Railway Station, City Centre, Udaipur</p>
<b>Phone:</b><p>0294 2485558</p>
</div></li>
<li><h4 id="lpu" onclick="myFunctio(event)">Sankalp</h4>
<div id="myDIV5" style="display:none">
<b>Address:</b><p>Mewar Motor Building, 48, Toran Bawadi, City Station Road, City Centre, Udaipur</p>
<b>Phone:</b><p>5100456</p>
</div></li>
<li><h4 id="ou" onclick="myFunctio(event)">Bawarchi Restaurant</h4>
<div id="myDIV6" style="display:none">
<b>Address:</b><p>6 - Delhi Gate, City Centre, Udaipur</p>
<b>Phone:</b><p>0294 2414985</p>
</div></li>
<li><h4 id="th" onclick="myFunctio(event)">Domino's</h4>
<div id="myDIV7" style="display:none">
<b>Address:</b><p>G-2, Upper Ground Floor, Celebration Mall, Bhuwana, Udaipur</p>
<b>Phone:</b><p>5151300</p>
</div></li>
<li><h4 id="ah" onclick="myFunctio(event)">Kadai Restaurant</h4>
<div id="myDIV8" style="display:none">
<b>Address:</b><p>126 ABC, Main Road, Near Shahi Bagh, Udaipur</p>
<b>Phone:</b><p>9166801860</p>
</div></li>
<li><h4 id="hhl" onclick="myFunctio(event)">7 Days Restaurant</h4>
<div id="myDIV9" style="display:none">
<b>Address:</b><p>Hotel Varju Villa, 100 Feet Road, Near Nand Bhawan, Shobhagpura, Udaipur</p>
<b>Phone:</b><p>0294 2980923</p>
</div></li>
<li><h4 id="hs" onclick="myFunctio(event)">Traditional Khana</h4>
<div id="myDIV10" style="display:none">
<b>Address:</b><p>48-D Panchwati Circle, Adjoining RK Mall, Panchwati, Udaipur</p>
<b>Phone:</b><p>7665366999</p>
</div></li>
<li><h4 id="hrp" onclick="myFunctio(event)">Zucchini Restaurant</h4>
<div id="myDIV11" style="display:none">
<b>Address:</b><p>Near D P Jewellers, Hanuman Temple, Bhopalpura, Udaipur</p>
<b>Phone:</b><p>099822 82167</p>
</div></li>
<li><h4 id="fj" onclick="myFunctio(event)">foodiez Junction</h4>
<div id="myDIV12" style="display:none">
<b>Address:</b><p>Shop No.18, Opposite Kalyan Jewellers, Delhi Gate, Udaipur</p>
<b>Phone:</b><p>8875307860</p>
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
