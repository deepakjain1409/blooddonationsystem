<?php 
include 'connect.php'; session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1">  <title>php project</title> 
 
 <link rel="stylesheet" type="text/css" href="style.css"> 
 
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></scri pt> 
 
</head> 
<body> 
 <header class="header"> 
	 	<nav class="navbar navbar-style"> 
	 	 	<div class="container"> 
	 	 	 	<div class="navbar-header"> 
 	 	 	 	<button type="button" class="navbar-toggle" datatoggle="collapse" data-target="#micon"> 
	 	 	 	 	 	<span class="icon-bar"></span> 
 	 	 	 	 	<span class="icon-bar"></span>  	 	 	 	 	<span class="icon-bar"></span> 
	 	 	 	 	</button> 
 
	 	 	 	 	<a href=""> 
	 	 	 	 	 	<img class="logo" src="logo1.jpg"> 
	 	 	 	 	</a> 	 	 	 	 	 
	 	 	 	</div> 
	 	 	 	<div class="collapse navbar-collapse" id="micon"> 
	 	 	 	<ul class="nav navbar-nav navbar-right"> 
	 	 	 	 	<li><a href="home.php"><b>Home</b></a></li> 
	 	 	 	 <!-- <li><a href="login.php"><b>Login</b></a></li> --> 
	 	 	 	 	<li><a href="team.php"><b>Donors</b></a></li> 
 	 	 	 	 
	 	 	 	 	<li><a href="blood.php"><b>Blood 
Availibity</b></a></li> 
    <li><a href="about_us.php"><b>about us</b></a></li>  
	 	 	 	</ul> 
	 	 	</div> 
	 	 	</div>  	 	 
	 	</nav> 
	 	<br> 
 	 
	 	<div class="container"> 	 	 	 
	 	 	<div class="row"> 
	 	 	 	<div class="col-sm-6 banner-info" > 
	 	 	 	 	<h2><b>Be Responsive</b></h2> 
    <!-- <p class="big-text">"Donate!"</p> -->     <p class="big-text">"Once a blood donor, always a lifesaver."</p> 
	 	 	 	 	<p>Are u Willing to Donate the Blood for the 
Needy, Join our Blood Donors family by clicking this blood donors registration link.</p> 
	 	 	 	 	<!-- <a class="btn btn-first"  
href="contact.php">Sign In</a> 
	 	 	 	 	<a class="btn btn-second"  
	href="sign_up.php">Sign Up</a> 	 --> 	 	 	 
	 	 	 	</div> 
	 	 	 	<div class="col-sm-6 banner-image"> 
 	 	 	 	 	 	 	 
	 	 	 	 	<img src="blood.png" class="img-responsive" > 
 
	 	 	 	</div> 
	 	 	</div> 
	 	</div> 
 </header> 
</body> 
</html> 
