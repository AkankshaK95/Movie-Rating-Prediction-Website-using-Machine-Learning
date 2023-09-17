<!DOCTYPE html>
<html>

<head>     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body style="background:url('movie3.jpg') no-repeat; background-size:cover; height:1150px">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width:1350px;
  padding:50px;
  position: relative;
  margin: auto;
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
	h1 {position:relative;
    top:-5px; 
    font-size: 70px;
	color:white;
	text-shadow: 2px 2px 5px Yellow;
	font-family: "Comic Sans MS", cursive, sans-serif;
}

</style>
<title>MOVIE RATING PREDICTION</title>
<center>
<p id="daa" class="daa"></p>
<h1><font color="White">Movie Rating Prediction</font></h1>
</center>
</head>

<body>
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
<img src="1.jpg" height="100" width="80" class="user">
<form action="connectionret.php" method="post">
<fieldset>
<b>
<center><pre>
	<div class="container"  style="width:400px;margin-top:-20px">
	<div class="card">	<div class="card-body">
Movie Name    <input type="text" name="mname1" placeholder="Enter the movie name"></p>
<input type="submit" value="Submit">
</fieldset>
</center></pre>
</form>
</body>
</html>
