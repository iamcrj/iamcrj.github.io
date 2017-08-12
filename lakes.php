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
  <!--<div class="header-link"><Button id="login" onclick="openProfile()">Profile</Button></div>-->
  <div class="header-link"><a id="login" href="home.html">Home</a></div>
  </div>
  </div>
  <div>
  <img src="fs1.jpg" alt="" class="slideshow">
  <img src="pic.jpg" alt="" class="slideshow" >
  <img src="swr.jpg" alt="" class="slideshow" >
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
  <i><a href="museums.php">Museums</a></i>
  <i><a href="temples.php">Temples</a></i>
    <i><a href="4&5star.php">4&5 Star Hotels</a></i>
      <i><a href="2&3star.php">2&3 Star Hotels</a></i>
        <i><a href="restaurants.php">Restaurants</a></i>
          <i><a href="airways.php">Airways</a></i>
            <i><a href="railways.php">Railways</a></i>
<a style="margin-top:95px; text-align:center; font-size:16px; color:black;" href="roamudaipur.php">&copy;RoamUdaipur.com</a>
</div>
<div id="jkk"><h2>Lakes</h2></div>
<div id="searched" style="border:none; height:600px;">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'fs')" id="defaultOpen">Fateh Sagar Lake</button>
  <button class="tablinks" onclick="openCity(event, 'pl')">Pichola Lake</button>
 <button class="tablinks" onclick="openCity(event, 'us')">Udai Sagar Lake</button>
 <button class="tablinks" onclick="openCity(event, 'js')">Jaisamand Lake</button>
  <button class="tablinks" onclick="openCity(event, 'rl')">Rajsamand Lake</button>
  <button class="tablinks" onclick="openCity(event, 'dt')">Dudh/ Doodh Talai</button>
  <button class="tablinks" onclick="openCity(event, 'bt')">Jiyan Sagar (Badi Ka Talab)</button>
  <button class="tablinks" onclick="openCity(event, 'ss')">Swaroop Sagar</button>

 </div>

<div id="fs" class="tabcontent">
  <h3>Fateh Sagar Lake</h3>
  <img src="fateh.jpg" style="width:80%; height:50%;">
  <p>It is an artificial lake named after Maharana Fateh Singh of Udaipur and Mewar, constructed north-west of Udaipur.Within the confines of the Fatah Sagar Lake,
  there are three small islands; the largest of these is the Nehru Park, which is a popular tourist attraction, the second island houses a public park with an
  impressive water-jet fountain, and the third island is the address for the Udaipur Solar Observatory (USO). The Nehru park is accessible by inboard motor
  boats. The blue waters of the lake and the backdrop of the green mountains has given the soubriquet of ‘The Second Kashmir’ to Udaipur </p>
</div>

<div id="pl" class="tabcontent">
<h3>Pichola Lake</h3>
<img src="pichola.jpg" style="width:80%; height:50%;">
<p>Pichola Lake is one of the most beautiful and picturesque lakes of Udaipur.Located in the heart of the city, Pichola Lake is the oldest and one of the
largest lakes of Udaipur.Talking about the dimensions of Pichhola Lake, it is extended to 3 miles in length, 2 miles in width and has depth of 30 feet.
Lake Pichola comprises several islands. The world-famous Lake Palace is perfectly located on the Jag Island of this beautiful lake. Even the Jag Mandir,
another popular and most famous Wedding destination, is located on an island of Pichola lake.A trip to Pichola Lake would be
incomplete with a boat ride. At the time sun-set, a boat ride in this lake is sufficient to mesmerize anyone. </p>
</div>

<div id="us" class="tabcontent">
  <h3>Udai Sagar Lake</h3>
  <img src="udai.jpg" style="width:80%; height:50%;">
  <p>Udaisagar Lake, one of the five prominent lakes of Udaipur,[1] is situated around 13 km in the east of Udaipur. This lake was built
  by Maharana Udai Singh in 1565. Udai Sagar Lake is around 4 km in length, 2.5 km in width and 9 meters deep at the maximum.
  The Udai Sagar Lake is approachable by road from the Udaipur City. Visitors can take Local buses, Tongas, auto-rickshaws and taxis to reach Udai Sagar. There is no entry
  ticket levied on visit to Udai Sagar.</p>
</div>

<div id="js" class="tabcontent">
  <h3>Dhebar Lake</h3>
  <img src="jai.jpg" style="width:80%; height:50%;">
<p>Dhebar Lake (also known as Jaisamand Lake) is India's second-largest artificial lake. It is 45 km from District headquarters of Udaipur. The lake has a
total number of 3 islands measuring from 10 to 40 acres (160,000 m2) each. The Dhebar Lake Marble Dam is 300 Meters long and is a part of the "Heritage Monuments
of India". The dam also has the Hawa Mahal Palace, winter Capital of the erstwhile Maharanas of Mewar. It covers area of 36 square miles.Dhebar Lake has elegant
steps leading to the water and marble Chhatri on its bank with a small Shiv temple that marks the grace of the lake. On either side are the palaces built
for the past kings favourite queens.</p>
</div>
<div id="rl" class="tabcontent">
  <h3>Rajsamand Lake</h3>
  <img src="raj.jpeg" style="width:80%; height:50%;">
<p>Rajsamand Lake is one of the five popular lakes of Mewar. Located 66 km in the north of Udaipur, Rajsamand Lake lies between the cities of Rajnagar and
Kankroli. It is also known by the name of Rajsamudra Lake in Rajasthan. Rajsamand Lake was built by Maharana Raj Singh in 1660.
On the southern end of the lake, the huge embankment is composed of white marble. It has marble terraces and stone steps that touch the waters of the lake.
Also on the embankment of the lake are nine pavilions or 'nauchowki' (nine ghats),which were constructed by Maharana Raj Singh. These beautifully carved pavilions
are festooned with pictures of the sun, chariots, gods, birds and detailed carvings. The history of Mewar is inscribed in 1017 stanzas,
on 27 marble slabs, that are called the Raj Prasasti. It has been acclaimed as one of the longest etchings in India.
At sunset, the waters of the lake glitter with the startling light of the sun.</p>
</div>
<div id="dt" class="tabcontent">
  <h3>Dudh Talai Lake</h3>
  <img src="dudh.jpg" style="width:80%; height:50%;">
<p>Doodh Talai is a small lake that adores the south-east direction of Pichola Lake. Located in the southern side of Shiv Niwas Palace, Dudh Talai contributes
to the waters of Lake Pichola. This stream adds to the picturesque triangle in the company of Pichola on one side, Doodh Talai on the second
and M.L. Verma Garden on the third. The Doodh Talai Lake is located very much near the center of the Udaipur City.[citation needed] It is around 24 km away from
Udaipur Airport, and just 4 km from Udaipur City railway station and Udaipur City Bus Depot.Visitors can also take local Tongas, auto-rickshaws and taxis
to reach Doodh Talai.</p>
</div>
<div id="bt" class="tabcontent">
  <h3>Jiyan Sagar (Badi Ka Talab)</h3>
  <img src="jiyan.jpg" style="width:80%; height:50%;">
<p>Jiyan Sagar is another striking lake, located in the village of Badi. Built by Maharana Raj Singh, Jiyan Sagar was built to deal with the problem of famine in the area.
The lake was named after Jana Devi, mother of Raj Singh. Jiyan Sagar is also known as Badi Ka Talab. It sprawls in an area of 155 sq. km. and the embankment
of the lake extends to the length of 180 meters and width of 18 meters. Jiyan Sagar also adores three artistic kiosks (chattris). </p>
</div>
<div id="ss" class="tabcontent">
  <h3>Swaroop Sagar Lake</h3>
  <img src="ss.jpg" style="width:80%; height:50%;">
<p>Swaroop Sagar is a small artificial lake that was created by Maharana Swaroop Singh. The lake was subsequently named after him. It is also known as
Kumharia Talab. Located behind the famous Jagdish Temple, Kumharia Talab is near Chand Pol adjoining Rangsagar. The lake was actually built to provide water to the people of Udaipur.
Kumharia Talab is connected with Lake Pichola and Fateh Sagar Lake. </p>
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
</body>
</html>
