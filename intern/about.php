<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
input[type=text], input[type=password] {
  width: 100%;
  border: 3px solid black;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
}
.newspaper {
  column-count: 3;
  column-width: 100px;
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

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background-color: black;
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
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
    <a href="temp.html">Temperature Control</a>
    <a href="pressure.html">Pressure Control</a>
      <a href="flow.html">Flow Control</a>
      <a href="diag.php">Diagnostics</a>
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
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image.jpg" style="width:100%; height:500px;">
  <div class="text">"Petroleum refinery consists of numerous process units in operation, which are subjected to diverse accident risks in day-to-day operations under extreme operating conditions. Odour emission factors (OEFs) for oil refineries are useful data for 
estimating odour emission rates (OERs) and developing odour emission inventories. To develop representative OEFs, OERs for all different odour sources of oil refineries must be measured or calculated. One of the most accurate yet the most expensive methods of developing OERs is direct source sampling followed by olfactometry analysis using screened panelists."</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image2.jpg" style="width:100%; height:500px;">
  <div class="text">"Born from the vision of achieving self-reliance in oil refining and marketing for the nation, XX has gathered a legacy of more than 25 years of accumulated experiences in all areas of petroleum refining. The strength of XX springs from its experience of operating the largest number of refineries in India and adapting to a variety of refining processes along the way."</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image1.png" style="width:100%; height:500px;">
  <div class="text">"The production of a large amount of wastewater in the process of natural gas refining, which cannot even be released into the environment in many cases, has become the major problem of the natural gas refineries. However, the existence of rich waste heat sources in gas refineries allows the use of thermal methods to desalinate the refinery wastewater.</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<div class="newspaper" style="color:black; display:block; font-size:25px; text-align:justify; background-color:#6b7d7285; font-style:oblique;  padding: 25px 25px;">
With our myriad solutions for myriad needs. With a wide compass of offerings that touch your life. A world bursting with diverse solutions to cater to your energy needs, every day. A world steered by innovative technology to create value for you, in every way. Where we consider it our duty to keep your kitchen stoves alight with clean and safe gas, all through the day.Where we take the lead to extend personalized vehicle & customer care through our retail outlets, round the clock. Where we provide the necessary thrust for your dreams to take flight, quite literally!<br><br>
Our refinery produces gasoline, diesel, propane, butane, sulphur, heavy fuel oil, smelting grade coke, and asphalt. It included four main sources of emissions: a Fluidized Catalytic Cracking Unit (FCCU) and Sulphur Recovery Unit (SRU), a wastewater treatment plant, and a storage tank farm. It is surrounded by agricultural land to the north and east, with a commercial/industrial area to the south, and a residential area to the west. The oil refinery includes four main sources of air emissions: FCCU stack, SRU stack, a wastewater treatment lagoon, and storage tanks.<br>
<b>Odour Emission Factors</b><br>   
Odour emission factors (OEFs) for oil refineries are useful data for estimating odour emission rates (OERs) and developing odour emission inventories. To develop representative OEFs, OERs for all different odour sources of oil refineries must be measured or calculated. One of the most accurate yet the most expensive methods of developing OERs is direct source sampling followed by olfactometry analysis using screened panelists. However, access issues, potential hazard in collecting samples from tall stacks, and existence of fugitive emissions limit the direct measurement methods. Reverse odour dispersion modeling is an alternative method that can be applied to estimate OERs where direct measurement is limited.<br><b>Risk Management</b><br>
Petroleum refineries are complex infrastructures with various process units which can perform multiple phase operations. Petroleum Refineries Process Units (PRPU) are capital intensive and a constant flow production infrastructure with a high level of risk that can cause catastrophic accidents. However, the pressure of daily demand and commitment to production target in operations of most refineries around the globe has led to a strong push of safety boundaries, which
has led to occurrences of major accidents. The breach of safety boundaries in a petroleum refinery domain is a result of combination of multiple interactive events. These series of interactive events often precipitate into the disruption of petroleum refinery operations. Based on historical cases of major accidents reported in the petroleum refining industry, it is evident that we have the build-up of interactive events is due to lapses in risk management.
</div>
<center>
<p style="color:black; font-size:25px; text-align:justify; background-color:#39331785; padding: 25px 25px;">
<b><u>MAJOR ONGOING PROJECTS</u></b><br><br><b>SHIKHRARPUR REFINERY PROJECT: </b>The objectives of the project is to enhance the capacity of existing Refinery at Shikhrapur from present capacity of 5.5 MMTPA to 7.5 MMTPA and to meet BS VI Auto Fuel Specifications for MS & HSD produced from this refinery. The project envisages a new Hydrogen Generation Unit (HGU), revamping and capacity expansion of existing units, augmentation of Utilities, Offsite and other associated facilities.
<br><br>
<b>QUANTATIVE ASSESSMENT OF DISTRUPTION RISKS OF PERTROLEUM REFINERY OPERATION: </b>In view of the complexity of refineries, process units, structures and
operations, the risk elements and attributes of disruption risk to PRPU operation are identified based on information extracted from a literature review of historical accident reports, literatures on accident analysis and brainstorming session with domain experts. The process of identification of PRPU risk elements and attributes is important to have in-depth knowledge and a real understanding of the PRPU disruption risks problem.<br><br></p>
<p style="color:black; font-size:30px; text-align:center; background-color:#e6660085; font-style:oblique;"><br><u>
TO GET MORE INFORMATION YOU CAN CONTACT US ON emailaddr</u><br><br></p></body></html>
