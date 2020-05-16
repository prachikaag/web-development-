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
          <h1>Human-Machine Interface</h1><br>

          <div class="card" style="width:700px">
            <img class="card-img-top" src="./../schematics/hmi.jpg" alt="Card image" style="text-align: center">
            <!-- <div class="card-img-overlay">
                          <p style="opacity: 0.5;" class="card-text bg-dark rounded px-2 text-light">Control Loop working Diagram </p>
                        </div> -->
          </div>
          <div>
            <!-- <h3 class="my-4" style="text-align: justify;">Control Loop </h3>
                        <p style="text-align: justify;"> -->

            <br><br>
            <B>HMI </B>–operators and engineers do the configuration of set-points control
            algorithms and establish parameters in the controller.
            The HMI displays the process status information<br>
            <br>

            <p>A Human-Machine Interface (HMI) is a user interface or dashboard that connects
              a person to a machine, system, or device. While the term can technically be applied to any screen that allows a user
              to interact with a device, HMI is most commonly used in the context of an industrial process. </p>

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