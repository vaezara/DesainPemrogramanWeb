<?php
session_start();

$valid_username = 'nova'; // Contoh username
$valid_password = 'Nova1'; // Contoh password

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$error_message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi
    if (empty($username) || empty($password)) {
        $error_message = "Harus terisi";
    } elseif (strlen($password) > 6) {
        $error_message = "Password maksimal 6 karakter";
    } elseif (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
        $error_message = "Password harus terdiri dari huruf besar dan kecil";
    } elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error_message = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Laundry Nova</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Laundry Nova</h1>
    </header>
    <div class="login-container">
        <h2>Mohon login terlebih dahulu</h2>
        <form id="loginForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm();">
            <p id="message"><?php echo $error_message; ?></p>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>
