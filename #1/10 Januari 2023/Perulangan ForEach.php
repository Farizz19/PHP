<html>

    <head>
        <title>Perulangan PHP</title>
    </head>

    <body style="background-color: black; color: white;"></body></body></body></body></body></body></body></body>
         <h1>Belajar Perulangan FOREACH Di PHP</h1>

        <hr>

        <?php
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

        // (Array as Alias)
        $nomor = 1;
        foreach($menu["menu makanan"] as $mm){
            echo $nomor . ". " . $mm . "<br>";
            $nomor++;
        }
        
        // foreach($menu["menu makanan"] as $mm => $makanan){
        //     echo ($mm + 1) . ". " . $makanan . "<br>";
        // }
        ?>
    </body>

</html>