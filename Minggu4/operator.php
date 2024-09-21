<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a *  $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil a + b : {$hasilTambah} <br>";
echo "Hasil a - b : {$hasilKurang} <br>";
echo "Hasil a * b : {$hasilKali} <br>";
echo "Hasil a / b : {$hasilBagi} <br>";
echo "Hasil a % b : {$sisaBagi} <br>";
echo "Hasil a ** b : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b ? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b ? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b ? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b ? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil sama dengan dari b ? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar sama dengan dari b ? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "a And b hasilnya : " . ($hasilAnd ? "Ya" : "Tidak") . "<br>";
echo "a Or b hasilnya : " . ($hasilOr ? "Ya" : "Tidak") . "<br>";
echo "Not A hasilnya : " . ($hasilNotA ? "Ya" : "Tidak") . "<br>";
echo "Not B hasilnya : " . ($hasilNotB ? "Ya" : "Tidak") . "<br>";

$a += $b;
echo "Hasil a += b : {$a} <br>";
$a -= $b;
echo "Hasil a -= b : {$a} <br>";
$a *= $b;
echo "Hasil a *= b : {$a} <br>";
$a /= $b;
echo "Hasil a /= b : {$a} <br>";
$a %= $b;
echo "Hasil a %= b : {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a dengan b hasilnya identik? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a dengan b hasilnya tidak identik? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";
?>