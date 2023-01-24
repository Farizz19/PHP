<html>
    <head>
        <title>AZ Comp</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <?php
                require("Header.php");
                ?>
            </div>

            <div class="menu">
                <?php
                require("Menu.php");
                ?>
            </div>

            <div class="content">
                    <form action="" method="POST" style="padding: 20px;">
                        Pilih Katalog :
                        <select name="katalog">
                            <!-- <option disabled>Pilih</option> -->
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
                        </select>
            
                        <input type="submit" value="check">
                        <hr>
                        <table border="3" cellpadding="3" cellspacing="3" width="300">
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                 <th>Jenis</th>
                            </tr>
                                
                            <?php

        $kt = $_POST['katalog'];
        $no = 1;
        
        $hardware = ["Monitor", "CPU", "Keyboard", "Mouse", "VGA"];
        $software = ["Windows OS", "Linux OS", "Mac OS"];
        

        // if ($kt = ""){
        //     echo "pilih produk";
        // }


        if ($kt == "Hardware"){
            foreach($hardware as $hw){
                echo "
                <tr>
                <td>{$no}</td>
                <td>{$hw}</td>
                <td>{$kt}</td>
                </tr>";
                $no++;
            }
        }

    
        if ($kt == "Software"){
            foreach($software as $sw){
                echo "
                <tr>
                <td>{$no}</td>
                <td>{$sw}</td>
                <td>{$kt}</td>
                </tr>";
                $no++;
            }  
        }
        ?>      
                        </table>
                    </form>
            </div>

            <div class="footer">
                <?php
                require("Footer.php");
                ?>
            </div>
        </div>
    </body>
</html>