<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_pinjam WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    echo "Peminjaman berhasil dihapus.";
    header("Location: daftar_pinjam.php");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>