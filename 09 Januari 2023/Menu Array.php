<html>

    <head>
        <title>Array PHP</title>
    </head>

    <body>
        <h1>Belajar Array Di PHP</h1>
        <hr>

        <?php

        $makanan = array("Mie Goreng", "Nasi Goreng", "Mie Rebus", "Mie Pansit", "Bakso", "Mie Ayam");

        echo "Daftar Menu Makanan <hr><br>";

        echo $makanan[4];
        echo "<br><br>";
        print_r($makanan);

        echo "<br><br>";
        echo "Jumlah Makanan : " . count($makanan) . " Makanan";
        ?>
    </body>
</html>