<html>

    <head>
        <title>IF PHP</title>
    </head>

    <body></body></body></body></body></body></body></body></body></body></body></body>
         <h1>Belajar IF Di PHP</h1>

        <hr>

        <?php

        // $nilai = 80;
        // $nama = "fariz";

        $inisial = array(
        "siska",
        "sisu",
        "susi",
        "suci",
        "salsa");

        $inf = array(
        "akbar",
        "albarru",
        "amar",
        "david",
        "rudio",
        "tirta",
        "naufal",
        "fariz",
        "jepy",
        "arya",
        "arel ",
        );
        // PENGGUNAAN IF DALAM PHP

        //  foreach($inisial as $s){
        //     echo $s . "<br>";

        //     if ($s == "susi"){
        //     echo $s . " <b>itu adalah nama saya</b> <br>";
        // }
        // }
        
        echo "<h4>Daftar Nama Inisial S</h4>";

         foreach ($inisial as $s){
            
            // echo $s . "<br>";

            if ($s == "susi"){
            echo $s . " <b>itu adalah nama saya</b> <br>";
        }
            else {
            echo $s . "<br>";
        }
        }

        echo "<h4>Daftar Nama Penghuni Surga</h4>";
        // $no = 1;
        foreach ($inf as $i){
            
            // echo $s . "<br>";

            if ($i == "fariz"){
            echo $i . " <b>itu adalah nama saya</b> <br>";
        }
            else {
            echo $i . "<br>";
        }
        }


        // if($nilai >= 80 ){
	    // echo
        // "Keterangan : <b>Anda Lulus</b> 
        // <br>
        // Grade : <b>B</b>
        // <br>
        // Nilai Anda = " . $nilai
        // ;
        // }

        // // else if($nilai == 80){
	    // // echo "Anda Lulus 
        // // <br>
        // // Grade B";
        // // }

        // // else if($nilai <= 80){
	    // // echo "Anda Gagal 
        // // <br>
        // // Grade B";
        // // }
        
        // else{
	    // echo
        // "Keterangan : <b>Anda Tidak Lulus</b>
        // <br>
        // Grade : <b>C</b>
        // <br>
        // Nilai Anda = " . $nilai;
        // }
       

        ?>
    </body>

</html>