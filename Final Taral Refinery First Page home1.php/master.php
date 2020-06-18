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
</body>