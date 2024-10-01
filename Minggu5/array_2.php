<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Dosen</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px;
            }

            th, td {
                text-align: left;
                padding: 5px;
                border: 2px solid palevioletred;
            }

            th {
                background-color: pink;
            }

            td {
                background-color: antiquewhite;
            }
        </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
            
            // echo "Nama : {$Dosen ['nama']} <br>";
            // echo "Domisili : {$Dosen ['domisili']} <br>";
            // echo "jenis_kelamin : {$Dosen ['jenis_kelamin']} <br>";
        ];
        ?>

        <table>
            <tr>
                <th>Field</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>