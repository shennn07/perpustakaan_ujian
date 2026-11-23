<?php
require 'koneksi.php';


$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$jumlah = $_POST['jumlah'];

// Validasi input
if (empty($id_user) || empty($id_buku) || empty($tanggal_pinjam) || empty($tanggal_kembali) || empty($jumlah)) {
    die("Semua field harus diisi.");
}
// Query untuk menambahkan data peminjaman ke database
$query = "INSERT INTO tb_pinjam (id_user, id_buku, tanggal_pinjam, tanggal_kembali, jumlah) VALUES ('$id_user', '$id_buku', '$tanggal_pinjam', '$tanggal_kembali', '$jumlah')";

if (mysqli_query($koneksi, $query)) {
    echo "Peminjaman berhasil ditambahkan.";
    header("Location: daftar_pinjam.php"); // Redirect ke halaman index setelah berhasil menambahkan
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>