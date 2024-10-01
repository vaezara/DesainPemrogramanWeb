<?php
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>



<!-- <html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $name = $_REQUEST['fname'];
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// }
?> -->

</body>
</html> -->



<!-- <?php
// $nama = @$_GET['nama'];
// $usia = @$_GET['usia'];

// echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?> -->