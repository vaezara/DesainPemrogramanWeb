<?php

if (isset($_POST['email']) && isset($_POST['nama'])) {

    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');

    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Email valid</h3>";
        echo "Nama yang Anda masukkan: " . $nama . "<br>";
        echo "Email yang Anda masukkan adalah: " . htmlspecialchars($email);
        echo "<br><br><a href='form1.php'>Kembali ke Form</a>";
    } else {
        echo "<h3>Email tidak valid</h3>";
        echo "Silakan masukkan email yang benar.";
        echo "<br><br><a href='form1.php'>Kembali ke Form</a>";
    }
} else {
    echo "<h3>Data tidak lengkap</h3>";
    echo "Silakan masukkan nama dan email pada form.";
    echo "<br><br><a href='form1.php'>Kembali ke Form</a>";
}
?>