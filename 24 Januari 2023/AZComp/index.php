<html>
    <head>
        <title>AZ Comp</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" 
        type="image/png" 
        href="modar.jpg" /> 
    </head>
    <body>
        <div class="container">
            <div class="header">
                 <?php
                require("Header.php");
                ?>
            </div>

            <div class="menu">
                <?php
                require("Menu.php");
                ?>
            </div>

            <div class="content">
                 <div style="padding: 20px;">
                 <h3>Selamat datang di toko AZ Computer.</h3> <img src="modar.jpg" alt="" width="80px" style="float: right;">

                 <img src="toko.jpg" alt="" width="480px">
                </div>
                   <!-- <h3>Selamat datang di toko AZ Computer.</h3> -->
            </div>

            <div class="footer">
                <?php
                require("Footer.php");
                ?>
            </div>
        </div>
    </body>
</html>