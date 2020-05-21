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

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("image.jpg");

  min-height: 450px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

<link rel="stylesheet" href="css.css">
</head>
<body style="background-color:white;">
<h1>
<font color="black"><center>
MANAGEMENT SYSTEM</center>
</font></h1>
<div class="navbar">
  <a href="home2.php">Home</a>
  <a href="about1.php">About Us</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Controls
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
  <a href="ref1.php">System Workflow</a>
    <a href="temp1.html">Temperature Control</a>
    <a href="pressure1.html">Pressure Control</a>
      <a href="flow1.html">Flow Control</a>
  </div>
  </div> 
  <a onclick="Logout()">Logout </a>
</div>
<script>
    function Logout(){
        alert("You are logged out");
        window.location.href='home1.php';
    }
    </script>

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
<div class="bg-img">
 
</div>

<p style="color:black; display:block; font-size:25px; text-align:center; background-color:#e9f04c85; font-style:oblique; top-margin:0px;  padding: 14px 16px;">"Born from the vision of achieving self-reliance in oil refining and marketing for the nation, XX has gathered a legacy of more than 25 years of accumulated experiences in all areas of petroleum refining. The strength of XX springs from its experience of operating the largest number of refineries in India and adapting to a variety of refining processes along the way."</p>

<center>
<p style="color:black; font-size:25px; text-align:center; background-color:#81e0d185; padding: 10px 30px;"><br><br>
<b><u>ENVIRONMENT FRONT</u></b><br><br>"On the environment front, all xx refineries fully comply with the statutory requirements. Several Clean Development Mechanism projects have also been initiated. To address concerns on safety at the work place, a number of steps were taken during the year, resulting in reduction of the frequency of accidents.<br>Innovative strategies and knowledge-sharing are the tools available for converting challenges into opportunities for sustained organisational growth. With strategies and plans for several value-added projects in place, xx refineries will continue to play a leading role in the downstream hydrocarbon sector for meeting the rising energy needs of our country."
<br><br><br></p>
<p style="color:black; font-size:30px; text-align:center; background-color:#e6660085; font-style:oblique;"><br><u>
TO GET MORE INFORMATION YOU CAN CONTACT US ON emailaddr</u><br><br></p></body></html>
