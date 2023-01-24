<?php

        $kt = $_POST['katalog'];
        $no = 1;

        $hardware = ["Monitor", "CPU", "Keyboard", "Mouse"];
        $software = ["Windows OS", "Linux OS", "Mac OS"];


        if ($kt = "hardware"){
            foreach($hardware as $hw){
                $out = $hw;
            }  
        }
        
        else {
    if ($kt = "software") {
        foreach ($software as $sw) {
            echo $sw;
        }
    }
}
        
        ?>