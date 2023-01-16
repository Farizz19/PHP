<html>

    <head>
        <title>Array PHP</title>
    </head>

    <body>
        <h1>Belajar Array Di PHP</h1>
        <hr>

        <?php

        $produk1 = array("Monitor", "Keyboard", "Mouse");

        // Menambahkan Data 
        $produk1[] = "Mouse Pad";
        $produk1[] = "CPU";
        // $produk2 = ["Monitor", "Keyboard", "Mouse"];

        print_r($produk1);
        echo "<br><br>";

        // print_r($produk2);
        // echo "<br><br>";

        // echo $produk1[0] . "-" . $produk1[1] . "-" . $produk1[2] . "<br>";

        // echo $produk2[0];

        echo "<br><br>";
        echo "Jumlah Produk 1 : " . count($produk1) . " Item";
        ?>
    </body>
</html>