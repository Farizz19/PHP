<html>
    <head>
        <title>Array Hari For dan ForEach</title>
    </head>
    <body>
        <h1 style="color: red; text-align: center;">BELAJAR ARRAY DI PHP</h1>
        <hr style="height: 5px; background-color: black;">

        <?php

        // ARRAY HARI (INDEKS)
        $hari = [
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum'at",
        "Sabtu",
        "Minggu",
         ];
        // ARRAY HARI (INDEKS)

        print_r($hari);

        echo "<div style='margin-bottom: 20px;'></div>";

        // PERULANGAN FOR
        $ch = count($hari);
        for ($a = 0; $a < $ch; $a++){
          echo "<div
          style='background-color: red;
          margin: 3px;
          float: left;
          width: 60px;
          text-align: center;
          padding: 10px;'> $hari[$a] </div>";
        }
        // PERULANGAN FOR
        
        // JUDUL FOR
        echo "<div style='clear: both';></div>";
        echo "<div</div><b>Perulangan For</b></div>";
        // JUDUL FOR

        echo "<div style='clear: both; margin: 20px;'></div>";

        // PERULANGAN FOREACH
        foreach ($hari as $h){
            echo "<div
            style='background-color: orangered;
            margin: 3px;
            float: left;
            width: 60px;
            text-align: center;
            padding: 10px;'> $h </div>";;
        }
        // PERULANGAN FOREACH

        // JUDUL FOREACH
        echo "<div style='clear: both';></div>";
        echo "<div><b>Perulangan ForEach</b></div>";
        // JUDUL FOREACH

        echo "<div style='margin-bottom: 20px;'></div>";

        // TOTAL ARRAY
        echo "<b>Total Hari</b> : " . count($hari);
        // TOTAL ARRAY

        ?>

    </body>
</html>