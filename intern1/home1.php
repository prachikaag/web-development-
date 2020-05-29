<!DOCTYPE html>
<html>

<head>
  <?php
  $content = 'This is about us page content';
  include('master.php');
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
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

  <br>
  <div class="bg-img">
    <form name="f2" action="home1.php" method="post" class="container">
      <h1>EMPLOYEE LOGIN</h1>



      <div class="form-group">
        <label for="fname"><b>Name</b></label><br>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Name" />
      </div>
      <div class="form-group">
        <label for="pass"><b>Password</b></label><br>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" />
      </div>



      <button type="submit" name="submit-btn" class="btn" onclick="return validatefrm()">Login</button>
    </form><br><br>
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
        header('Location: home2.php');
      } else {
        echo "
			<h3>Username/password is incorrect.</h3>";
      }
    }
    ?>
  </div>

  <p style="color:black; display:block; font-size:25px; text-align:center; background-color:#e9f04c85; font-style:oblique; top-margin:0px;  padding: 14px 16px;">"Born from the vision of achieving self-reliance in oil refining and marketing for the nation, XX has gathered a legacy of more than 25 years of accumulated experiences in all areas of petroleum refining. The strength of XX springs from its experience of operating the largest number of refineries in India and adapting to a variety of refining processes along the way."</p>

  <center>
    <p style="color:black; font-size:25px; text-align:center; background-color:#81e0d185; padding: 10px 30px;"><br><br>
      <b><u>ENVIRONMENT FRONT</u></b><br><br>"On the environment front, all xx refineries fully comply with the statutory requirements. Several Clean Development Mechanism projects have also been initiated. To address concerns on safety at the work place, a number of steps were taken during the year, resulting in reduction of the frequency of accidents.<br>Innovative strategies and knowledge-sharing are the tools available for converting challenges into opportunities for sustained organisational growth. With strategies and plans for several value-added projects in place, xx refineries will continue to play a leading role in the downstream hydrocarbon sector for meeting the rising energy needs of our country."
      <br><br><br></p>
    <p style="color:black; font-size:30px; text-align:center; background-color:#e6660085; font-style:oblique;"><br><u>
        TO GET MORE INFORMATION YOU CAN CONTACT US ON emailaddr</u><br><br></p>
</body>

</html>