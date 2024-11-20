<?php
    // Parameter koneksi
    $serverName = "DESKTOP-EQ55Q8H"; // Nama server dan port
    $connectionOptions = [
        "Database" => "prakwebdb2",
        "Uid" => "", // Masukkan username SQL Server
        "PWD" => "", // Masukkan password SQL Server
        "Encrypt" => true,
        "TrustServerCertificate" => true
    ];

    // Membuka koneksi
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn) {
        echo "";
    } else {
        echo "Error koneksi!";
        die(print_r(sqlsrv_errors(), true));
    }
?>