<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta name="description" content="Udaipur Tourism and Important Information">
     <meta name="keywords" content="HTML,CSS,JavaScript,Bootstrap">
     <meta name="author" content="Chirag Jain">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
     <link rel="stylesheet" type="text/css" href="main1.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
	  <style>
#contact{
text-align:center;
background-color:#FBE9E7;
height:1000px;}
#image{
width:100%;
height:400px;
}
#head1{
text-align:center;
padding-top:50px;}
#para1{
text-align:center;
padding-top:20px;}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  height:70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}

</style>
	  </head>
<body>
	  <?php
	  session_start();
	  if(isset($_SESSION['username']))
	  {
	  echo 'You are logged in as'.$_SESSION['username'];
	  }
	  ?>
	  <div class="hero-text">
  <h2>roam udaipur</h2>
  <ul id="headerul">
  <li><a href="index.html">Home</a></li>
 <li><a href="aboutus.html">About Us</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><a href="next.html">What's Next?</a></li>
</ul></div>
<div id="contact">
<img id="image" src="custo.jpg" >
<h1 id="head1">Contact Us</h1>
<p id="para1">You can contact us through</p>
<h4 id="head2">feedback@roamudaipur.com</h4>
<h1 id="head1">Follow Us</h1>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
</body>
</html>