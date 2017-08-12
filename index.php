<!DOCTYPE html>
<html>
  <head>
    <title>Roam Udaipur</title>
	<meta charset="utf-8">

	 <meta name="description" content="Udaipur Tourism and Important Information">
     <meta name="keywords" content="HTML,CSS,JavaScript,Bootstrap">
     <meta name="author" content="Chirag Jain">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	 <link rel="stylesheet" type="text/css" href="imp1.css" >
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 </head>
<body>
<div class="hero-text1">
  <h2>RoamUdaipur</h2>
  <ul id="headerul">

  <li><a href="index.html">Home</a></li>
 <li><a href="aboutus.html">About Us</a></li>
  <li><a href="contactus.html">Contact Us</a></li>
  <li><a href="next.html">What's Next?</a></li>
</ul>
<span id="sidebar" style="font-size:30px;cursor:pointer" onclick="openNavb()">&#9776;</span>
<div id="mySidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavb()">&times;</a>
   <h2>RoamUdaipur</h2>
  <a href="index.html">Home</a>
  <a href="aboutus.html">About Us</a>
  <a href="contactus.html">Contact Us</a>
  <a href="next.html">What's Next?</a>
</div>
</div>
<script>
function openNavb() {
console.log(1);
    document.getElementById("mySidenav1").style.width = "100%";
}

function closeNavb() {
    document.getElementById("mySidenav1").style.width = "0";
}
</script>
<div class="hero-image">

  <div class="hero-text">

   <h1>Welcome to Udaipur</h1>
	<h1>City of Lakes</h1><span>|</span>
</div>
</div>

<div class="main">

  <div class="drop2">
    <button class="btn2" onclick="myFunction2()">Hotels & Restaurants</button>
    <div class="content2" id="myDropdown2">
      <a href="4&5star.html">5 & 4 Star Hotels</a>
      <a href="2&3star.html">3 & 2 Star Hotels</a>
      <a href="restaurants.html">Restaurants</a>
    </div>
  </div>
  <div class="drop">
    <button class="btn" onclick="myFunction()">Places To See</button>
    <div class="content" id="myDropdown">
      <a href="lakes.html">Lakes</a>
      <a href="museums.html">Museums</a>
      <a href="temples.html">Temples</a>
    </div>
  </div>
  <div class="drop1">
    <button class="btn1" onclick="myFunction1()">How To Reach</button>
    <div class="content1" id="myDropdown1">
      <a href="airways.html">Airways</a>
      <a href="railways.html">Railways</a>
      <a href="#">Roadways</a>
    </div>
  </div>
</div>
<script src="navbar.js">
</script>
<div id="describe">
<h2 id="tourist">Tourist at Udaipur?</h2>
<p>Don't worry ! We are here to help. </p>
</div>
<div id="popular">
<h2>Popular Places to See...</h2>
<div class="card">
  <img src="fs1.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h4><b>Fateh Sagar Lake</b></h4>
	<a href="lakes.html">Visit</a>
     </div>
</div>
<div class="card1">
  <img src="rajiv1.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h4><b>Rajiv Gandhi Park</b></h4>
<a href="lakes.html">Visit</a>
     </div>
</div>
<div class="card2">
  <img src="sajjan.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h4><b>Sajjangarh Fort</b></h4>
<a href="lakes.html">Visit</a>
     </div>
</div>
<div class="card3">
  <img src="jag.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h4><b>Jag Mandir</b></h4>
<a href="lakes.html">Visit</a>
     </div>
</div>
</div>
<div id="services">
<h2>Why Udaipur??</h2>
<div id="ed"><div id="edu"> <i class="material-icons" style="font-size:70px;color:red">school</i></div>
      <h4>Education Hub</h4>
 </div>
 <div id="vote"><div id="ico"> <i class="material-icons" style="font-size:70px;color:red">public</i></div>
      <h4>In 2009, Voted as Best City in the World.</h4>
 </div>
  <div id="rest"><div id="restro"> <i class="material-icons" style="font-size:70px;color:red">restaurant</i></div>
      <h4>Best Restaurants</h4>
 </div>
 </div>
<div id="abt"><h2>About Udaipur</h2>
<div id="content"><p>
Udaipur is a beautiful city in the Indian State of Rajasthan. The master piece of the city is the floating lake palace in Lake Pichola. Udaipur is also well
connected to the major cities of India by land, rail or air. Because of its picturesque and scenic locations, Udaipur has been the shooting location for many
Hollywood and Bolllywood movies. Udaipur is a popular tourist destination in India. It is also known as the City of Lakes. The Pichola lake, Fateh Sagar Lake,
Udai Sagar and Swaroop Sagar in this city are considered some of the most beautiful lakes in the state.</p></div></div>
<script src="restro.js"></script>

</body>
</html>
