<html>

    <head>
        <title>Operator PHP</title>
    </head>

    <body>

    <?php

// PENJUMLAHAN


    $a = 10;
    $b = 20;
    $c = 7;
    $d = 3;
    $e = 2;

    $hasiltambah = $a + $b;
    $hasilkurang = $b - $a;
    $hasilkali = $a * $b;
    $hasilpembagi = $b / $a;
    $hasilbagi = $c % $d;
    $pangkat = $e ** $d;

    echo "Operator Aritmatika Pada PHP <hr><br>";

    echo "Nilai A = " . "<b>" . $a . "</b>" . "<br> 
        Nilai B = " . "<b>" . $b . "</b> <br><br>";

    echo "Hasil Penjumlahan Nilai A dan Nilai B Adalah = " . "<b>" . $hasiltambah . "</b><br>";
    echo "Hasil Pengurangan Nilai B dan Nilai A Adalah = " . "<b>" . $hasilkurang . "</b><br>";
    echo "Hasil Perkalian Nilai A dan Nilai B Adalah = " . "<b>" . $hasilkali . "</b><br>";
    echo "Hasil Pembagian Nilai B dan Nilai A Adalah = " . "<b>" . $hasilpembagi . "</b><br>";

    echo "Sisa Bagi 7 dan 3 Adalah = " . "<b>" . $hasilbagi . "</b><br>";

    echo "Hasil Pemangkatan Nilai C dan Nilai D Adalah = " . "<b>" . $pangkat . "</b><br>";
    ?>
       
    </body>
</html>