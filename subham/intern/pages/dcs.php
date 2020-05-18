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
                    <h1>Distributed control systems</h1><br>

                    <div>
                        <div class="w3-content w3-display-container" ; style="max-width:700px">
                            <img class="mySlides" src="./../schematics/controlloop.jpg" style="width:100%">
                            <img class="mySlides" src="./../schematics/hmi.jpg" style="width:100%">
                            <img class="mySlides" src="./../schematics/dcs.jpg" style="width:100%">
                            <img class="mySlides" src="./../schematics/pressure.jpg" style="width:100%">

                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                        <!-- <h3 class="my-4" style="text-align: justify;">Control Loop </h3>
                        <p style="text-align: justify;"> -->
                        <br>
                        <br>
                        <B> DCS </B>– Distributed control systems can handle multiple automation processes in a factory,
                        it can control all the automation or it can monitor or supervise the factory process.<br>
                        <br>

                        <p>A distributed control system (DCS) is a computerised control system for a process or
                            plant usually with many control loops, in which autonomous controllers are distributed
                            throughout the system, but there is no central operator supervisory control.This is in contrast
                            to systems that use centralized controllers; either discrete controllers located at a central
                            control room or within a central </p>




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