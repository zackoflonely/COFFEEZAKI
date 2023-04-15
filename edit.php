<?php
// mulai session
session_start();

// periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // simpan data ke dalam session
    $_SESSION['nama'][$id] = $nama;
    $_SESSION['harga'][$id] = $harga;
    $_SESSION['stok'][$id] = $stok;

    // kembali ke halaman sebelumnya atau halaman tertentu
    header('Location: admin.php');
    exit();
}
?>
