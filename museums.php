<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="main1.css">
	 </head>
<body>
  <?php
  session_start();
  $name=$_SESSION['username']; ?>
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
  <img src="ahar.jpeg" alt="" class="slideshow">
  <img src="kumbhal.jpeg" alt="" class="slideshow" >
  <img src="bhar.jpg" alt="" class="slideshow" >
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
    <i><a href="4&5star.php">4&5 Star Hotels</a></i>
      <i><a href="2&3star.php">2&3 Star Hotels</a></i>
        <i><a href="restaurants.php">Restaurants</a></i>
          <i><a href="airways.php">Airways</a></i>
            <i><a href="railways.php">Railways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Museums</h2></div>
<div id="searched" style="border:none; height:600px;">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'fs')" id="defaultOpen">Ahar Cenotaphs</button>
  <button class="tablinks" onclick="openCity(event, 'pl')">Shilpgram Museum</button>
 <button class="tablinks" onclick="openCity(event, 'js')">City Palace Museum</button>
  <button class="tablinks" onclick="openCity(event, 'us')">Bhartiya Lok Kala Museum</button>
 <button class="tablinks" onclick="openCity(event, 'rl')">Sajjan Garh Palace </button>
  <button class="tablinks" onclick="openCity(event, 'dt')">Kumbhalgarh Fort </button>
   <button class="tablinks" onclick="openCity(event, 'bt')">Chittorgarh Fort </button>
 </div>

<div id="fs" class="tabcontent">
<h3>Ahar Cenotaphs</h3>
<img src="ahar.jpeg" style="width:80%; height:50%;">
<p>The Ahar Cenotaphs are a group of royal cenotaphs located in Ahar, Rajasthan, about 2 km east of Udaipur, in Rajasthan, India.
This archeological museum is a repository of antiques, sculptures and artifacts.Coins,earthen pots,terracotta toys,stone weights,animals’ figures, balls and iron
objects are also found inside the museum.
The metal statue of Lord Buddha and image of God Surya are amongst the most notable exhibits here.Some of these exhibits are as old as 5000 years and have been
excavated by Archeological Department of Rajasthan.
Timing of Ahar Museum is 10:00 am and to 4:30 pm. The museum is open all days except Fridays and national holidays.</p>
</div>

<div id="pl" class="tabcontent">
<h3>Shilpgram Museum</h3>
<img src="shilp.jpg" style="width:80%; height:50%;">
<p>The ultimate rural arts and crafts complex, Shilpgram is located in Havala Village near Udaipur. The Shilpgram Village of Udaipur is spread over 70 acres
of lands and is a living ethnographic exhibition that depicts the culture and art of the local people in Western India.Inside the village are two museums that
exhibit simple objects of day-to-day life, but play important role in painting a beautiful picture of rural and tribal life. These objects have been carved
and created by local artisans. Many thematic huts are installed matching the geography and ethnicity of different communities.The Shilpgram village aims at
increasing awareness and knowledge among the younger generations about rural life and crafts. There are different workshops for children focused to enhance
their hands on arts, theater and music.</p>
</div>
<div id="us" class="tabcontent">
<h3>Bhartiya Lok Kala Museum</h3>
<img src="bhar.jpg" style="width:80%; height:50%;">
<p>Bhartiya Lok Kala Museum is one of the most famous museums of Udaipur, exhibiting the brilliant collection of folk articles of Rajasthan. This rare
compilation varies from typical rural-dresses, ornaments, puppets, masks, dolls, folk musical instruments, folk deities and paintings. The museum is
comfortably located in the building of Bhartiya Lok Kala Mandal near Chetak Circle in Udaipur city.The museum portrays the remarkable collection of over past
44 years, gathered by the Bhartiya Lok Kala Mandal. To provide a summarized idea of the folk heritage of India, traditional attires, ornaments, miniature
paintings and many other art objects are displayed here. Bhartiya Lok Kala Museum of Udaipur definitely requires a visit to closely observe the artistic and
culturally rich region of Rajasthan.</p>
</div>
<div id="js" class="tabcontent">
<h3>City Palace Museum</h3>
<img src="city.jpg" style="width:80%; height:50%;">
<p>A jewel in the crown of Udaipur, the City Palace is one of the most beautiful edifices on the banks of Lake Pichola. Surely lined amongst the greatest
architectural marvels ever constructed in history, the City Palace is a major tourist attraction in Udaipur.In order to preserve the heritage of Mewar and the
royal family, a museum was built in the complex. Highly complimenting the architecture of the City Palace, the museum is segmented into a series of Palaces,
which were built during a time span of nearly three centuries.Amongst them, the City Palace Museum boasts of the Mardana Mahal (palace for the royal men) and
Zenana Mahal (palace for the royal ladies).  Decorations of the palace courtyards such as of Mor Chowk, Chini Chitrashali, Bhim Vilas, Krishan Vilas and
Chandra Mahal, are captivating as well.Also known as Pratap Museum, the City Palace Museum houses a remarkable collection of ancient sculptures, antiques and
inscriptions of the bygone era.  Rare Rajasthani murals, court paintings of the Mewar school, glass inlay work and artifacts add charm to the different
sections of the Museum.</p>
</div>
<div id="rl" class="tabcontent">
<h3>Sajjan Garh Palace</h3>
<img src="sajjan.jpg" style="width:80%; height:50%;">
<p>The Monsoon Palace, also known as the Sajjan Garh Palace, is a hilltop palatial residence in the city of Udaipur, Rajasthan in India.It is named Sajjangarh after Maharana Sajjan Singh (1874–1884) of the Mewar Dynasty, who built it in 1884. The palace offers a panoramic
view of the city's lakes, palaces and surrounding countryside. It was built chiefly to watch the monsoon clouds; hence, appropriately, it is popularly
known as Monsoon Palace.The palace provides a beautiful view of the sunset.The Monsoon Palace is 5 kilometres (3.1 mi) west of Udaipur and overlooks Lake
Pichola. The palace can be accessed by a winding road through the surrounding Sajjan Singh Sanctuary by taxi or 'auto rickshaw'. The palace and the Sajjan
Singh Sanctuary are major attractions and are open to visitors until sunset.
</p>
</div>
<div id="dt" class="tabcontent">
<h3>Kumbhalgarh Fort</h3>
<img src="kumbhal.jpeg" style="width:80%; height:50%;">
<p>Kumbhalgarh is a Mewar fortress on the westerly range of Aravalli Hills, in the Rajsamand district near Udaipur of Rajasthan state in
western India. It is a World Heritage Site included in Hill Forts of Rajasthan.With a wall over 38 km long, the fort is the second largest wall in the world
after the Great Wall of China and the second largest fort in Rajasthan after Chittorgarh Fort.Kumbalgarh is situated 82 km northwest of Udaipur by road.
</p>
</div>
<div id="bt" class="tabcontent">
<h3>Chittorgarh Fort</h3>
<img src="chittor.jpg" style="width:80%; height:50%;">
<p>Chittorgarh Fort has received the credit of being the largest fort of India. The massive fort is located on a high hill near the Gambheri River in
 Chittorgarh. Chittorgarh Fort lies at a distance of 112 kms from the city of Udaipur in Rajasthan. This fort was built by various Maurya rulers in the 7th
 century. This huge fort covers an area of 700 acres, extending to 3 kms in length and 13 kms in peripheral length/
</p>
</div>
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
<footer>
<div class="container" >
<p style="text-align:center; padding:20px;">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
