<!DOCTYPE html>
<html>
    <head>
        <body>
            <h2>Array Terindeks</h2>
            <?php
                $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
                //echo $Listdosen[2] . "<br>";
                //echo $Listdosen[0] . "<br>";
                //echo $Listdosen[1] . "<br>";

                //menggunakan perulangan
                foreach ($Listdosen as $dosen) {
                    echo $dosen . "<br>";
                }
            ?>
        </body>
    </head>
</html>