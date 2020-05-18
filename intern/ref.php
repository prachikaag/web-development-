<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type=text], input[type=password] {
  width: 100%;
  border: 3px solid black;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.sub {
  float: left;
  width: 100%;
  height:7%;
    background-color:#b2f0b2;
    opacity:1;
}
.sub {
  float: left;
  width: 100%;
  height:7%;
    background-color:#b2f0b2;
    opacity:1;
}

.navbar {
  overflow: hidden;
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {display:block;}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<script>
function validatefrm()
{
	var x = document.forms["f2"]["name"];
	if(x.value == "")
	{
		alert("Name must be filled out");
		x.focus();
		return false;
	}
	var y = document.forms["f2"]["pass"];
	if(y.value == "")
	{
		alert("Password must be filled out");
		y.focus();
		return false;
	}
}
</script>
<link rel="stylesheet" href="css.css">
</head>


<body style="background-color:white;">
<h1>
<font color="black"><center>
MANAGEMENT SYSTEM</center>
</font></h1>
<div class="navbar">
  <a href="home.php">Home</a>
  <a href="about.php">About Us</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Controls
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
  <a href="ref.php">System Workflow</a>
    <a href="">Temperature Control</a>
    <a href="">Pressure Control</a>
  </div>
  </div> 
   <a href="home1.php">Logout</a>
</div>

<script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<br>

<img src="capture.png">
<h1>CONTROLLERS:</h1>
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>
<b>DESALTER</b><br><br>
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>
<b>OIL HEATER</b><br><br>
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>
<b>WASH WATER</b><br><br>
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>
<b>STEAM</b>
</body>
</html>