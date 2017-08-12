<!DOCTYPE html>
<html>
<head>
<title>Roam Udaipur</title>
<link href="main.css" rel="stylesheet" />
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body onscroll="Scroll()">
<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location:home.php');
}
?>
<div class="header">
<div class="inner-header">
<div class="logo"><a href="roamudaipur.php">RoamUdaipur.com</a></div>
<!--<div class="header-link"><Button id="login" onClick="signup()">Sign up</Button></div>
<div class="header-link"><Button id="login" onClick="login()">Login</Button></div>
-->
</div>
</div>
<div class="content">
<div class="banner-image">
<div class="inner-banner-image">
<div class="banner-content">
<h1>Welcome to Udaipur</h1>
<p>#1 Tourist Destination in Rajasthan</p>
<a href="" class="button">Continue</a>
<!--<Button class="button" onClick="signup()">Join Now</Button>-->
</div>
<div class="banner-content2" style="display:none">
<Button id="butto" onClick="closelogin()">X</Button>
<form action="loginscript.php" method="POST">
<label for="username">Username:</label>
<input type="text" name="username" id="username" required/>
<br/>
<br />
<label for="dob" id="doblabel">Password:</label>
<input type="date" name="dob" id="dob" required/>
<br />
<br / >
<input type="submit" name="submit" id="sub"/>
</form>
</div>
<div class="banner-content3" style="display:none">
<Button id="butto" onClick="closelogin()">X</Button>

<form action="signup.php" method="POST">
<label for="username">Username:</label>
<input type="text" name="username" id="username" onchange="showUser(this.value)"  required />
<br/>
<div id="txtHint">Availability:</div>
<br />
<label for="dob" id="doblabel">Password:</label>
<input type="date" name="password" id="dob" required/>
<br />
<br / >
<label for="email" id="doblabel">Email:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="email" required/>
<br />
<br / >
<br/>
<div style="text-align:center;"><input type="submit" name="submit" id="sub" /></div>
</form>
</div>
</div>
</div>
<div class="container" id="containu" >
<div class="items">
<a href="#">
<img src="tourist.jpg" class="thumbnail">
<div class="caption">
<h2>Tourism</h2>
<p>Beautiful City surrounded by Aravalli Range.</p>
</div>
</a>
</div>
<div class="items">
<a href="#">
<img src="edu.jpg" class="thumbnail">
<div class="caption">
<h2>Education</h2>
<p>Best for Primary and Secondary Education.</p>
</div>
</a>
</div>
<div class="items">
<a href="#">
<img src="sm.jpg" class="thumbnail">
<div class="caption">
<h2>Smart City</h2>
<p>On Governement List of Smart City.</p>
</div>
</a>
</div>
</div>
</div>
<footer>
<div class="container">
<p style="text-align:center">Copyright &copy;Roam Udaipur.All Rights Reserved | Contact Us:+91 8290755844</p>
</div>
</footer>
<script>
function Scroll()
{
  var top=document.getElementById('containu');
  var ypos=window.pageYOffset;
  if(ypos>150)
  top.style.opacity="1";
  else {
    top.style.opacity="0";
  }
}
window.addEventListener("scroll",Scroll);
function showAnim()
{
  var contained=document.getElementsByClassName("items");
for(var i=0;i<contained.length;i++)
  contained.addClass("anim");
  }
function login()
{
var x=document.getElementsByClassName("banner-content");
var i;
for(i=0;i<x.length;i++)
x[i].style.display="none";
var y=document.getElementsByClassName("banner-content2");
for(i=0;i<y.length;i++)
y[i].style.display="block";
var z=document.getElementsByClassName("banner-content3");
for(i=0;i<z.length;i++)
z[i].style.display="none";
}
function closelogin()
{
var j;
console.log("2");
var x=document.getElementsByClassName("banner-content");
for(j=0;j<x.length;j++)
x[j].style.display="block";
var y=document.getElementsByClassName("banner-content2");
for(j=0;j<y.length;j++)
y[j].style.display="none";
var z=document.getElementsByClassName("banner-content3");
for(i=0;i<z.length;i++)
z[i].style.display="none";
}
function signup(){
var x=document.getElementsByClassName("banner-content");
var i;
for(i=0;i<x.length;i++)
x[i].style.display="none";
var y=document.getElementsByClassName("banner-content3");
for(i=0;i<y.length;i++)
y[i].style.display="block";
var z=document.getElementsByClassName("banner-content2");
for(i=0;i<z.length;i++)
z[i].style.display="none";
}
</script>
</body>
</html>
