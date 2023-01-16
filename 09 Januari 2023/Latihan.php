<html>

    <head>
        <title>Latihan PHP #1</title>
    </head>

    <body>

        <?php

        $namalengkap = "Muhammad Fariz Al-Haq";
        $ttl = "Dumai, 19 Maret 2006";
        $kelas = "XI";
        $jurusan = "Pengembangan Perangkat Lunak dan Gim (PPLG)";
        $judul = "BIODATA";
        
        ?>

        <h1 style="color: red;"><?= $judul ?></h1>

        <hr style="height: 3px; background-color: black;">

        <table border>
            <tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td style="background-color: orange;"><b><?= $namalengkap ?></b></td>
            </tr>

             <tr>
            <td><b>Tempat/Tanggal Lahir</b></td>
            <td>:</td>
            <td><?= $ttl ?></td>
            </tr>

             <tr>
            <td><b>Kelas</b></td>
            <td>:</td>
            <td><?= $kelas ?></td>
            </tr>

             <tr>
                <td><b>Jurusan</b></td>
                <td>:</td>
                <td><?= $jurusan ?></td>
            </tr>
        </table>

        <hr style="height: 3px; background-color: black;">

        <h5><i>Latihan Variabel Dengan PHP</i></h5>

    </body>
</html>