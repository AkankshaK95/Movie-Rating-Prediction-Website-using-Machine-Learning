<!DOCTYPE html>
<html>
<head> 
<script src="https://apis.google.com/js/platform.js" async defer></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="google-signin-client_id" content="151535434976-42oar8e9bq115sekcdsqrp34a4jm0doq.apps.googleusercontent.com">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body style="background:url('movie3.jpg') no-repeat; background-size:cover; height:1200px;">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1300px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
form {
  align:"center";
  background-color: #3c3c3c;
  border-radius: 20px;
  margin: 10px auto;
  font-family: Raleway;

  padding: 20px;
  width: 30%;
  min-width: 10px;
  
  
}
h1 {position:relative;
    top:-5px; 
    font-size: 70px;
	color:white;
	text-shadow: 2px 2px 5px Yellow;
	font-family: "Comic Sans MS", cursive, sans-serif;
}
img.user{
	position:absolute;
	top:0%;
	left:14%;
	background-clip:padding-box;
    transform:rotateY(150deg);
	animation:logodance 2s linear 0s infinite;
}

@keyframes logodance {
	0 {transform:rotateY(20deg);}
	20%   {transform:rotateY(50deg);}
	50%   {transform:rotateY(150deg);}
    70%   {transform:rotateY(180deg);}
	100%   {transform:rotateY(360deg);}
	}
	
	.rot{
	position:fixed;
	top:12%;
	color:white;}
	
</style>

<center>
<img src="1.jpg" height="100" width="80" class="user">
<title>MOVIE RATING PREDICTION</title>
<h1><font color="White">Movie Rating Prediction</h1><br><br>
<marquee class="rot">"Predict the future"</marquee>
<h4><font color="White"><font-size:60px>Check the movie rating </font></h4>
</center>
</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<div class="data">
<p>Profile Details</p>
<img id="pic" class="img-circle" width="100" height="100"/>
<p>Email Address</p>
<p id="email" class="alert alert-danger"></p>
<button onclick="signOut()" class="btn btn-danger">SignOut</button>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="pr1.jpeg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="pr2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="pr3.jpg" style="width:100%">
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  $(".g-signin2").css("display","none");
  $(".data").css("display","block");
  $("#pic").attr('src',profile.getImageUrl());
  $("#email").text(profile.getEmail());
}

function signOut()
{
	var auth2=gapi.auth2.getAuthInstance();
	auth2.signOut().then(function(){
		alert("You have been out");
		$(".g-signin2").css("display","block");
        $(".data").css("display","none");
		
	});
}
</script>
<form>
<fieldset>
<b>
<center><pre>
<a href="12345.php"><b><input type=button  value= "Rutuja" align="left"  ></b></a><br>
<a href="123456.php"><input type=button value= "For New Movie " align="left" ></a><br><br>
</fieldset>
</center></pre>
</form>
</body>
</html>
