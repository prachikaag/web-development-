<html>

<head>

  <link rel="stylesheet" href="style.css">
</head>


<body style="background-color:white;">

  <?php
  require('db.php');
  session_start();
  // If form submitted, insert values into the database.
  if (isset($_POST['submit-btn'])) {
    // removes backslashes
    $name = $_POST['fname'];
    //escapes special characters in a string
    $_SESSION['username'] = $name;

    $password = $_POST['pass'];
    //Checking is user existing in the database or not
    $query = "SELECT * FROM users WHERE username='$name' and password='$password' ";
    $result = mysqli_query($con, $query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      //$_SESSION['name']=$name;

      echo "welcome " . $name;
      header("Location: home.php");
    } else {
      echo "
    <h3>Username/password is incorrect.</h3>";
    }
  }
  ?><h1>
    <font color="black">
      <center>
        TARAL REFINERY SECTOR</center>
    </font>
  </h1>
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

  <form name="f2" action="login.php" method="post" style="color:black; float:center; padding-right:20px; padding-left:20px;">
    <h1 style=" background-color:#3528f685; text-align:center;">EMPLOYEE LOG IN</h1>
    <p style=" background-color:black;">Please fill in this form to login to your account.</p>
    <hr><br>
    <div style=" padding-right: 33%; padding-left: 33%;">
      <div style=" background-color:#3528f685;  border: 3px solid black; padding: 15px; width:100%; ">
        <b>Username:</b> <br><input type="text" name="fname">
        <br>
        <b>Password:<br>
        </b><input type="password" name="pass"><br>

        <input type="submit" name="submit-btn" value="SUBMIT" class="sub" onclick="return validatefrm()" style="width: 100%; background-color: black; color:white; "><Br><br><br></div>
  </form>
  </div>
</body>

</html>