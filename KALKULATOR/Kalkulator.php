<html>
    <head>
        <title>Latihan Function PHP</title>
    </head>
    <body>
        <h1>KALKULATOR SEDERHANA</h1>
        <hr>

        <!-- FUNCTION ADALAH SEKUMPULAN KODE YANG MENJALANKAN PERINTAH TERTENTU DAN DAPAT DIPANGGIL SECARA BERULANG -->

       <form action="" method="POST">
        Nilai 1 : <input type="number" name="nilaisatu" placeholder="masukkan nilai 1"><br><br>
        Nilai 2 : <input type="number" name="nilaidua" placeholder="masukkan nilai 2"><br><br>

        Pilih Operator : 
            <button name="tombol" value="tambah">+</button>
            <button name="tombol" value="kurang">-</button>
            <button name="tombol" value="kali">*</button>
            <button name="tombol" value="bagi">/</button>

            <!-- <select name="operator">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select> -->

                <br><br>
              <?php

        $ns = $_POST['nilaisatu'];
        $nd = $_POST['nilaidua'];
        $tom = $_POST['tombol'];
        // $out = $_POST[''];

        // $t = $_POST['tambah'];
        // $k = $_POST['kurang'];
        // $k = $_POST['kali'];
        // $k = $_POST['bagi'];

        // $opt = $_POST['operator'];

        if ($ns == '' || $nd == ''){
            $out = "-- 0 --";
        }
        
        else {
           if ($tom == 'tambah') {
               function tambah($ns, $nd)
               {
                   $a = $ns;
                   $b = $nd;
                   $hasil = $a + $b;
                   return $hasil;
               }
                echo "Nilai : {$ns} + {$nd}"; 
               $out =  tambah($ns, $nd);
           }

           if ($tom == 'kurang') {
               function kurang($ns, $nd)
               {
                   $a = $ns;
                   $b = $nd;
                   $hasil = $a - $b;
                   return $hasil;
               }
                echo "{$ns} - {$nd}"; 
               $out = kurang($ns, $nd);
            }

               if ($tom == 'kali') {
                   function kali($ns, $nd)
                   {
                       $a = $ns;
                       $b = $nd;
                       $hasil = $a * $b;
                       return $hasil;
                   }
                    echo "{$ns} * {$nd}"; 
                   $out = kali($ns, $nd);
            }

               if ($tom == 'bagi') {
                   function bagi($ns, $nd)
                   {
                       $a = $ns;
                       $b = $nd;
                       $hasil = $a / $b;
                       return $hasil;
                   }
                    echo "Nilai : {$ns} / {$nd}"; 
                   $out = bagi($ns, $nd);
            }
        }
?>

        <br><br>
       Hasil : <input name="total" value="<?php echo $out ?>">

        
       </form>

    </body>
</html>