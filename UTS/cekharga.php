<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$totalHarga = 0;
$berat = '';
$jenisLayanan = '';
$kecepatan = '';
$membership = '';
$diskon = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat = ceil($_POST['berat']);
    $jenisLayanan = $_POST['jenis_layanan'];
    $kecepatan = $_POST['kecepatan'];
    $membership = $_POST['membership'];
    
    switch ($jenisLayanan) {
        case "Cuci Kering":
            $hargaPerKilo = 5000;
            break;
        case "Cuci Setrika":
            $hargaPerKilo = 8000;
            break;
        case "Setrika":
            $hargaPerKilo = 6000;
            break;
    }

    $totalHarga = $hargaPerKilo * $berat;

    if ($kecepatan === "Ekspress") {
        $totalHarga += 2000 * $berat;
    }

    if ($membership === "Member") {
        $diskon = 0.1 * $totalHarga; 
    }

    if (isset($_SESSION['laundry_count'])) {
        $_SESSION['laundry_count'] += 1; 
    } else {
        $_SESSION['laundry_count'] = 1; 
    }

    if ($_SESSION['laundry_count'] == 6) {
        $totalHarga -= 2 * $hargaPerKilo; 
        $_SESSION['laundry_count'] = 0;
    }

    $totalHarga -= $diskon; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga Laundry Nova</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        header {
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 20px;
            background-color: palevioletred;
        }

        nav {
            display: flex;
        }

        nav a {
            margin-right: 10px;
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            color: palevioletred;
        }

        form {
            background: pink;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 15px;
            background-color: palevioletred;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d25c7c;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
        }

        footer {
            background-color: palevioletred;
            color: white; 
            text-align: center; 
            padding: 10px; 
            position: relative; 
            width: 100%; 
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Laundry Nova</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="cekharga.php">Cek Harga</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <script src="script.js"></script>

    <h2>Cek Harga Laundry</h2>

    <form method="POST" id="cekHargaForm">
        <label for="berat">Berat (kg):</label>
        <input type="text" id="berat" name="berat" min="1" required>

        <label for="jenis_layanan">Jenis Layanan:</label>
        <select id="jenis_layanan" name="jenis_layanan" required>
            <option value="Cuci Kering">Cuci Kering</option>
            <option value="Cuci Setrika">Cuci Setrika</option>
            <option value="Setrika">Setrika</option>
        </select>

        <label for="kecepatan">Kecepatan:</label>
        <select id="kecepatan" name="kecepatan" required>
            <option value="Reguler">Reguler</option>
            <option value="Ekspress">Ekspress</option>
        </select>

        <label for="membership">Membership:</label>
        <select id="membership" name="membership" required>
            <option value="Non Member">Non Member</option>
            <option value="Member">Member</option>
        </select>

        <button type="submit">CHECK</button>
    </form>

    <?php if ($totalHarga > 0): ?>
        <div class="result">
            <h3>Hasil Perhitungan:</h3>
            <p>Total Harga: Rp <?= number_format($totalHarga, 0, ',', '.'); ?></p>
            <?php if ($diskon > 0): ?>
                <p>Diskon Membership: Rp <?= number_format($diskon, 0, ',', '.'); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <footer>
        <p>Hubungi kami di: 0899876543</p>
    </footer>
</body>
</html>
