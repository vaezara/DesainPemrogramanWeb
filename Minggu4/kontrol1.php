<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiTertinggi1 = max($nilaiSiswa);
$nilaiTertinggi2 = null;
$nilaiTerendah1 = min($nilaiSiswa);
$nilaiTerendah2 = null;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < $nilaiTertinggi1 && ($nilaiTertinggi2 === null || $nilai > $nilaiTertinggi2)) {
        $nilaiTertinggi2 = $nilai;
    }
}

foreach ($nilaiSiswa as $nilai) {
    if ($nilai > $nilaiTerendah1 && ($nilaiTerendah2 === null || $nilai < $nilaiTerendah2)) {
        $nilaiTerendah2 = $nilai;
    }
}

// Hitung total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilai = 0;
$jumlahNilai = 0;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai != $nilaiTertinggi1 && $nilai != $nilaiTertinggi2 && $nilai != $nilaiTerendah1 && $nilai != $nilaiTerendah2) {
        $totalNilai += $nilai;
        $jumlahNilai++;
    }
}

$rataRataNilai = $totalNilai / $jumlahNilai;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo "Rata-rata nilai: $rataRataNilai<br>";
?>