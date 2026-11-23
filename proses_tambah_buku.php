<?php
require 'koneksi.php';


$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

// Validasi input
if (empty($judul) || empty($penerbit) || empty($tahun_terbit) || empty($stok) || empty($deskripsi)) {
    die("Semua field harus diisi.");
}
// Query untuk menambahkan data buku ke database
$query = "INSERT INTO tb_buku (judul, penerbit, tahun_terbit, stok, deskripsi) VALUES ('$judul', '$penerbit', '$tahun_terbit', '$stok', '$deskripsi')";

if (mysqli_query($koneksi, $query)) {
    echo "Buku berhasil ditambahkan.";
    header("Location: daftar_buku.php"); // Redirect ke halaman index setelah berhasil menambahkan
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>