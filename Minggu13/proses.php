<?php 
include('koneksi.php');

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';

if ($aksi == 'tambah') {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (sqlsrv_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        die("Gagal menambahkan data: " . print_r(sqlsrv_errors(), true));
    }
}

elseif ($aksi == 'ubah') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', 
            alamat='$alamat', no_telp='$no_telp' WHERE id = $id";

        if (sqlsrv_query($conn, $query)) {
            header("Location: index.php");
            exit();
        } else {
            die("Gagal mengupdate data: " . print_r(sqlsrv_errors(), true));
        }
    } else {
        echo "ID tidak valid.";
    }
}

elseif($aksi == 'hapus'){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM anggota WHERE id = $id";

        if (sqlsrv_query($conn, $query)) {
            header("Location: index.php");
            exit();
        } else {
            die("Gagal menghapus data: " . print_r(sqlsrv_errors(), true));
        }
    } else {
        echo "ID tidak valid.";
    }
} else {
    header("Location: index.php");
}

sqlsrv_close($koneksi);
?>