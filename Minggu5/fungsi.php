<?php
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."</br>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(1988, 2023) ." tahun<br/>";
    echo "Senang berkenalan dengan Anda</br>";
}

perkenalan("Elok");

// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";
?>