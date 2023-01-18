<?php

        $ns = $_POST['nilaisatu'];
        $nd = $_POST['nilaidua'];

        // $t = $_POST['tambah'];
        // $k = $_POST['kurang'];
        // $k = $_POST['kali'];
        // $k = $_POST['bagi'];

        // $opt = $_POST['operator'];

        if ($ns == '' || $nd == ''){
            echo "nilai belum diisi";
        }

        else{
        if ($t){
            function tambah($ns,$nd)
            {
                $a = $ns;
                $b = $nd;
                $hasil = $a + $b;
                return $hasil;
            }
            echo "hasil : " . tambah($ns, $nd);
        }

        if ($k){
            function kurang($ns,$nd)
            {
                $a = $ns;
                $b = $nd;
                $hasil = $a - $b;
                return $hasil;
            }
            echo "hasil : " . kurang($ns, $nd);
        }

        if ($ka){
            function kali($ns,$nd)
            {
                $a = $ns;
                $b = $nd;
                $hasil = $a * $b;
                return $hasil;
            }
            echo "hasil : " . kali($ns, $nd);
        }

        if ($b){
            function bagi($ns,$nd)
            {
                $a = $ns;
                $b = $nd;
                $hasil = $a / $b;
                return $hasil;
            }
            echo "hasil : " . bagi($ns, $nd);
        }
}

       

        ?>