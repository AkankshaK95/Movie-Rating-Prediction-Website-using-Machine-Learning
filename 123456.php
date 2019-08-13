<html>
<head>     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body style="background:url('movie3.jpg') no-repeat; background-size:cover; height:1200px">
<center>
<p id="daa" class="daa"></p>
<h1><font color="White">Movie Rating Prediction</font></h1>
</center>
<style>
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
</style>
</head>

<body>
<img src="1.jpg" height="100" width="80" class="user">
<form action="GUI.py" method="post">
<fieldset>
<b>
<center><pre>
<div class="col-md-4">
<div class="card">
<div class="card-body" style="background-color:Black;color:#ffffff;">
<h3>Enter New Movie Details</h3>
</div>
<div class="card-body">


Movie Name            <input type="text" name="mname" placeholder="Enter the movie name"required></p>
Critic  Reviews       <input type="text" name="1"    placeholder="Enter no. of critic reviews"required><br><br>
Director FB likes     <input type="text" name="2"  placeholder="Enter Director FB likes"required><br><br>
Actor_1 FB likes      <input type="text" name="3"  placeholder="Enter actor1 FB likes"required><br><br>
Voted Users           <input type="text" name="4" placeholder="Enter no. of voted users"required><br><br>
Casting FB likes      <input type="text" name="5"placeholder="Enter casting FB likes"required><br><br>
User Review           <input type="text" name="6"placeholder="Enter the user review"required><br><br>
Total Budget          <input type="text" name="7"placeholder="Enter budget"required><br><br>
Actor_2 FB likes      <input type="text" name="8" placeholder="Enter FB likes"required><br><br>
Movie Likes           <input type="text" name="9"  placeholder="Enter movie likes"required><br><br>
<input type="submit" value="Submit">
</pre>
</fieldset>
</form>
</div>
</div>
</div>
</center>
<div class="col-md-1"></div>
</div>
</div>
</center>
</body>
</html>
