<html>
    <head>
        <title>Belajar Function PHP</title>
    </head>
    <body>
        <h1>LATIHAN FUNCTION DI PHP</h1>
        <hr>

        <!-- FUNCTION ADALAH SEKUMPULAN KODE YANG MENJALANKAN PERINTAH TERTENTU DAN DAPAT DIPANGGIL SECARA BERULANG -->

        <?php

        $ns = $_POST['nilaisatu'];
        $nd = $_POST['nilaidua'];

        $rms = $_POST['rumus'];

        if ($ns == '' || $nd == ''){
            echo "nilai belum diisi";
        }
        else {

        if ($rms == 'segitiga'){
            function ST($ns, $nd){
            $alas = $ns;
            $tinggi = $nd;
            $ls = 0.5 * $alas * $tinggi;
            return $ls;
        }
                echo "
                <center>Luas Segitiga Dengan <br>
                Alas : <b>{$ns}</b> <br>
                Tinggi : <b>{$nd}</b> <br>
                Adalah : " . "<b>" . ST($ns, $nd) . "</center>";
        }

        if ($rms == 'persegipanjang'){
            function PP($ns, $nd){
            $panjang = $ns;
            $lebar = $nd;
            $luas = $panjang * $lebar;
            return $luas;
       }
                echo
                "<center>Luas Persegi Panjang Dengan <br>
                Panjang : <b>{$ns}</b> <br>
                Lebar : <b>{$nd}</b> <br>
                Adalah : " . "<b>" . PP($ns, $nd) . "</center>";
        }
        }

        // else {
        //     echo "nilai belum diisi";
        // }

        ?>
     
    </body>
</html>