<?php
$hargaProduk = 120000;

$diskon = 20;

$batasDiskon = 100000;

if ($hargaProduk > $batasDiskon) {
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * ($diskon / 100));
    echo "Harga setelah diskon 20% adalah: Rp " . $hargaSetelahDiskon;
} else {
    echo "Tidak ada diskon. Harga yang harus dibayar adalah: Rp " . $hargaProduk;
}
?>