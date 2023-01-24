<html>

    <head>
        <title>Array Multidimensi PHP</title>
    </head>

    <body>

        <h1>Belajar Array Multidimensi Di PHP</h1>
        <hr>

        <?php

        // ARRAY MULTIDIMENSI
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

        print_r ($menu);
        // echo "<br>";
        // echo "<br>";
        // print_r ($menu[0]);
        // echo "<br>";
        // print_r ($menu[1]);

        echo "<br>";
        echo "<br>";

        echo $menu["menu makanan"][1];
        echo "<br>";
        echo $menu["menu minuman"][1];
        echo "<br>";
        echo $menu["menu minuman"]["cappucino"][0];

        // echo "<br>";
        // echo $menu[1][2][1];
        // echo "<br>";
        // echo $menu[1][2][2][0];
        
            echo "<br>";

        echo count($menu
        [
            "menu minuman"
        ]);

            echo "<br>";

        echo count($menu
        [
            "menu makanan"
        ]);

            echo "<br>";

        echo count($menu
        [
            "menu minuman"]["cappucino"
        ]);
        ?>
    </body>
</html>