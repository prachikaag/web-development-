<html>
<head>
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

<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit-btn']))
{
        // removes backslashes
  $name =$_POST['name'];
        //escapes special characters in a string
$_SESSION['username']=$name;
  
  $password = $_POST['pass'];
  //Checking is user existing in the database or not
        $query = "SELECT * FROM admin WHERE username='$name' and password='$password' "; 
 $result = mysqli_query($con,$query) or die(mysqli_error());
 $rows = mysqli_num_rows($result);
        if($rows==1)
        	{
        	//$_SESSION['name']=$name;

					 echo "welcome ". $name;	 
         }
         else
         {
         	echo "<div class='form'>
			<h3>Username/password is incorrect.</h3>";
  }
 }
?><h1>
<font color="black"><center>
MANAGEMENT SYSTEM</center>
</font></h1>
<div class="navbar">
  <a href="home1.php">Home</a>
  <a href="aboutus.php">About Us</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Account
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="login.php">Login as employee</a>
    <a href="loginadmin.php">Login as admin</a>
  </div>
  </div> 
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

<form name="f2" action="loginadmin.php" method="post" style="color:black; float:center; padding-right:20px; padding-left:20px;" >
<h1  style=" background-color:#3528f685; text-align:center;">ADMIN LOG IN</h1>
    <p style=" background-color:black;">Please fill in this form to login to your account.</p>
    <hr><br>
    <div style=" padding-right: 33%; padding-left: 33%;">
<div style=" background-color:#3528f685;  border: 3px solid black; padding: 15px; width:100%; ">
<b>Name:</b> <br><input type="text" name="name" >
<br>
<b>Password:<br>
</b><input type="password" name="pass"><br>

<input type="submit" name="submit-btn" value="SUBMIT" class="sub" onclick="return validatefrm()" style="width: 100%; background-color: black; color:white; "><Br><br><br></div>
</form>
</div></body>
</html>

