<html>

    <head>
        <title>Perulangan PHP</title>
    </head>

    <body style="background-color: black; color: white;"></body></body></body></body></body></body></body></body>
         <h1>Belajar Perulangan FOR Di PHP</h1>

        <hr>

        <?php

        // MELAKUKAN PERULANGAN DARI 1 SAMPAI 10

        // Inisiasi, Kondisi, Dan Metode

        $menu = [
        "menu makanan" =>
            [
            'Nasi Goreng',
            'Mie Goreng'
            ],
     
        "menu minuman" =>
            [
            'Es Jeruk',
            'Kelapa Muda',
            
        "cappucino" =>
            [
            'Cappucino Dingin',
            'Cappucino Panas'
            ]
            ]
        ];

                  echo "<h3>Menu Rumah Makan PPLG</h3> <br>";

        $mm = count($menu["menu makanan"]);
        // $jumlah = 20;
        for ($a = 0; $a < 2; $a++)
            // for (
            //     $j = 1;
            //     $j < 2;
            //     $j++
            // )
        {
            echo ($a+1) . ". " . $menu["menu makanan"] [$a] .  "<br>";
        }

        echo "<br>";

        echo "<br>";

        for ($a = 0; $a < 2; $a++)
            // for (
            //     $j = 1;
            //     $j < 2;
            //     $j++
            // )
        {
            echo ($a+1) . ". " . $menu["menu minuman"] [$a] .  "<br>";
        }

        echo "<br>";

        echo "<br>";

        for ($a = 0; $a < 2; $a++)
            // for (
            //     $j = 1;
            //     $j < 2;
            //     $j++
            // )
        {
            echo ($a+1) . ". " . $menu["menu minuman"]["cappucino"] [$a] .  "<br>";
        }

        echo "<br>";

        echo "<br>";

        echo "Makanan " . count($menu
        [
            "menu makanan"
        ]);
        echo "<br>";
         echo "Minuman " . count($menu
        [
            "menu minuman"
        ]);
        echo "<br>";
         echo "Cappucino " . count($menu
        [
            "menu minuman"
        ]
            ["cappucino"]
    );

        ?>
    </body>

</html>