<html>
    <head>
        <title>Array Hari For dan ForEach</title>
    </head>
    <body>
        <h1 style="color: red; text-align: center;">BELAJAR ARRAY DI PHP</h1>
        <hr style="height: 5px; background-color: black;">

        <?php

        $hari = [
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum'at",
        "Sabtu",
        "Minggu",
         ];

        print_r($hari);

        echo "<br>";
        echo "<br>";
        echo "<br>";

        $ch = count($hari);
        $d = $hari;
        for ($a = 0; $a < $ch; $a++){
          echo "<div style='background-color: pink; margin: 3px; float: left; padding: 10px;'> $hari[$a] </div>";
        }
        echo "<div style='clear: both';></div>";
        echo "<div><b>Perulangan For</b></div>";

        echo "<div style='clear: both; margin: 20px;'></div>";

        foreach ($hari as $h){
            echo "<div style='background-color: orangered; margin: 3px; float: left; padding: 10px;'> $h </div>";;
        }
        echo "<div style='clear: both';></div>";
        echo "<div><b>Perulangan ForEach</b></div>";
        echo "<div style='margin-bottom: 5px;'></div>";

        echo "Total Hari : " . count($hari);

        // echo count($hari);

        ?>

    </body>
</html>