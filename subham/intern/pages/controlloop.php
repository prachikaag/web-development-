<html>
<?php
$content = 'This is about us page content';
include('./../master.php');
?>
<!-- includes navigation panel -->

<body>


      <main>
          <div class="container pt-3">
              <div class="row">
                  <div class="col-lg-12">
                      <h1>Control Loop</h1><br>

                      <div class="w3-content w3-display-container";  style="max-width:700px">
  <img class="mySlides" src="./../schematics/controlloop.jpg" style="width:100%">
  <img class="mySlides" src="./../schematics/hmi.jpg" style="width:100%">
  <img class="mySlides" src="./../schematics/dcs.jpg" style="width:100%">
  <img class="mySlides" src="./../schematics/pressure.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>


                      <div>
                        <!-- <h3 class="my-4" style="text-align: justify;">Control Loop </h3>
                        <p style="text-align: justify;"> -->
                        <br><br>
                        <B>Control loop </B>– control loop has sensors for measurement and they

                         have controller hardware like PLC, actuators, control valves,

                         breakers, switches, and motors. The controlled variable is transmitted to the controller from the sensors.<br>
                         <br>

                         <p>A control loop is the fundamental building block of industrial control systems.
                          It consists of all the physical components and control functions necessary to automatically adjust the
                          value of a measured process variable to equal the value of a desired set-point. It includes the process sensor,
                          the controller function, and the final control element which are all required for automatic control </p>




                        </p>
                      </div>
                  </div>

              </div>
          </div>
      </main>
      <script src="./../bootstrap/jquery.min.js"></script>
      <script src="./../bootstrap/popper.min.js"></script>
      <script src="./../bootstrap/bootstrap.min.js"></script>



      <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>


  </body>
</html>
