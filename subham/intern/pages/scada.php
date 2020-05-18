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
          <h1>Server or Master Control Unit</h1><br>

          <div class="card" style="width:700px">
            <img class="card-img-top" src="./../schematics/scada.jpg" alt="Card image" style="text-align: center">
            <!-- <div class="card-img-overlay">
                          <p style="opacity: 0.5;" class="card-text bg-dark rounded px-2 text-light">Control Loop working Diagram </p>
                        </div> -->
          </div>
          <div>
            <!-- <h3 class="my-4" style="text-align: justify;">Control Loop </h3>
                        <p style="text-align: justify;"> -->

            <br><br>
            <B>SCADA </B> (Supervisory control and Data acquisition)- server or master control unit – SCADA server acts as the master In the SCADA system,
            remote terminal units and PLC devises which are located at remote field sites act as slaves.<br>
            <br>

            <p>Supervisory control and data acquisition (SCADA) is a control system architecture
              comprising computers, networked data communications and graphical user interfaces
              (GUI) for high-level process supervisory management, while also comprising other peripheral
              devices like programmable logic controllers (PLC)
              and discrete proportional-integral-derivative (PID) controllers to interface with process 
            </p>
          </div>
        </div>

      </div>
    </div>
  </main>
  <script src="./../bootstrap/jquery.min.js"></script>
  <script src="./../bootstrap/popper.min.js"></script>
  <script src="./../bootstrap/bootstrap.min.js"></script>
</body>

</html>