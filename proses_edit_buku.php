<?php
require 'koneksi.php';

$id = (int) $_POST['id'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = (int) $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

// Validasi input
if (empty($penerbit) || empty($tahun_terbit) || empty($stok) || empty($deskripsi)) {
    die("Semua field harus diisi.");
}
// Query untuk memperbarui data buku di database
$query = "UPDATE tb_buku SET penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', stok = $stok, deskripsi = '$deskripsi' WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    echo "Buku berhasil diperbarui.";
    header("Location: daftar_buku.php"); // Redirect ke halaman index setelah berhasil memperbarui
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>