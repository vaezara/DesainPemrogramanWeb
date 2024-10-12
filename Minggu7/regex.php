<?php
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan : " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);  // Perbaikan pada penggunaan preg_replace
echo "<br>$new_text";

$pattern = '/[o]{1,3}/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan : " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}
?>