

<html>
<title>

Under construction

</title>
<?php
$content = 'This is about us page content';
include('./../master.php');
?>
<!-- includes navigation panel -->

<body>

    <div class="bgimg">

        <div class="center">

            <div class="responsive">

                <img src="./../schematics/uc.png" alt="under cons" width="800" height="600">

            </div>

        </div>

        <div class="middle1">

            <strong style="font-size: 35px;">UNDER CONSTRUCTION</strong>

        </div>





    </div>

<style>
    body,
    html {

        height: 100%;

        margin: 0;

    }



    .bgimg {

        background-image: url('./../schematics/back.jpg');

        height: 100%;

        background-position: center;

        background-size: cover;

        position: relative;

        color: white;

        font-family: "Courier New", Courier, monospace;

        font-size: 25px;

    }



    .topleft {

        position: absolute;

        top: 0;

        left: 16px;

    }



    .bottomleft {

        position: absolute;

        bottom: 0;

        left: 16px;

    }

    .center {

        position: absolute;

        top: 40%;

        left: 50%;

        transform: translate(-50%, -50%);

        text-align: center;

    }



    .middle {

        position: absolute;

        top: 70%;

        left: 50%;

        transform: translate(-50%, -50%);

        text-align: center;

    }

    .middle1 {

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);

        text-align: center;

        color: black;

    }

    @font-face {

        font-family: 'WisdomScriptAJ';

        src: url('font/WisdomScriptAJ.eot');

        src: local('WisdomScriptAJ'), url('font/WisdomScriptAJ.woff') format('woff'), url('font/WisdomScriptAJ.ttf') format('truetype');

    }

    .font {

        font-family: WisdomScriptAJ;

    }

    .responsive {

        width: 100%;

        max-width: 800px;

        height: auto;

    }

    a.black {

        color: inherit;

        text-decoration: none;

    }

    a.white {

        color: inherit;

        text-decoration: none;

    }





    hr {

        margin: auto;

        width: 40%;

    }
</style>
</body>

</html>