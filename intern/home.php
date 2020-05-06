<html>
<head>
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
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
  background-color: #572727;
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
<link rel="stylesheet" href="css.css">
</head>


<body style="background-color:#e9eadb;">
<h1>
<font color="black"><center>
MANAGEMENT SYSTEM</center>
</font></h1>
<div class="navbar">
  <a href="home.php">Home</a>
  <a href="">News</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Account
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="login.php">Login as client</a>
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

    </body>
</html>
