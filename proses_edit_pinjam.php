<?php
require 'koneksi.php';

$id = (int) $_POST['id'];
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$jumlah = (int) $_POST['jumlah'];

// Validasi input
if (empty($id_user) || empty($id_buku) || empty($tanggal_pinjam) || empty($tanggal_kembali) || empty($jumlah)) {
    die("Semua field harus diisi.");
}
// Query untuk memperbarui data peminjaman di database
$query = "UPDATE tb_pinjam SET id_user = '$id_user', id_buku = '$id_buku', tanggal_pinjam = '$tanggal_pinjam', tanggal_kembali = '$tanggal_kembali', jumlah = $jumlah WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    echo "Peminjaman berhasil diperbarui.";
    header("Location: daftar_pinjam.php"); // Redirect ke halaman index setelah berhasil memperbarui
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>