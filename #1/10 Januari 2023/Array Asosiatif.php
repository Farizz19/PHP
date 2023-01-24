<html>

    <head>
        <title>Array Asosiatif PHP</title>
    </head>

    <body>

        <h1>Belajar Array Asosiatif Di PHP</h1>
        <hr>

        <?php

        // ARRAY ASOSIATIF
        $identitas = [
        "nisn" => "3033366913",
        "nama" => "Muhammad Fariz Al-Haq",
        "kelas" => "XI",
        "jurusan" => "Pengembangan Perangkat Lunak dan Gim"
        ];

        echo $identitas["nama"];
        echo "<br>";
        print_r($identitas);
        ?>
    </body>
</html>