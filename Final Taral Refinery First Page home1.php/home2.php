
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:white;">
    <h1>
        <font color="black">
            <center>
                TARAL REFINERY SECTOR</center>
        </font>
    </h1>

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
</body></head>

<body>

  <div class="navbar">
    <a href="home2.php">Home</a>
    <a href="about.php">About Us</a>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction()">Controls
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content" id="myDropdown">
        <a href="ref1.php">System Workflow</a>
        <a href="temp1.html">Temperature Control</a>
        <a href="pressure1.html">Pressure Control</a>
        <a href="flow1.html">Flow Control</a>
        <a href="diag1.php">Diagnostics</a>
      </div>
    </div>
    <a onclick="Logout()">Logout </a>
  </div>
  <script>
    function Logout() {
      alert("You are logged out");
      window.location.href = 'home1.php';
    }
  </script>


  <br>
  <div class="bg-img">

  </div>

  <p style="color:black; display:block; font-size:25px; text-align:center; background-color:#e9f04c85; font-style:oblique; top-margin:0px;  padding: 14px 16px;">"Born from the vision of achieving self-reliance in oil refining and marketing for the nation, Taral Refinery has gathered a legacy of more than 25 years of accumulated experiences in all areas of petroleum refining. The strength of Taral Refinery springs from its experience of operating the largest number of refineries in India and adapting to a variety of refining processes along the way."</p>

  <center>
    <p style="color:black; font-size:25px; text-align:center; background-color:#81e0d185; padding: 10px 30px;"><br><br>
      <b><u>ENVIRONMENT FRONT</u></b><br><br>"On the environment front, all Taral Refineries fully comply with the statutory requirements. Several Clean Development Mechanism projects have also been initiated. To address concerns on safety at the work place, a number of steps were taken during the year, resulting in reduction of the frequency of accidents.<br>Innovative strategies and knowledge-sharing are the tools available for converting challenges into opportunities for sustained organisational growth. With strategies and plans for several value-added projects in place, xx refineries will continue to play a leading role in the downstream hydrocarbon sector for meeting the rising energy needs of our country."
      <br><br><br></p>
    <p style="color:black; font-size:30px; text-align:center; background-color:#e6660085; font-style:oblique;"><br><u>
        TO GET MORE INFORMATION YOU CAN CONTACT US ON taralrefin@gmail.com</u><br><br></p>
</body>

</html>