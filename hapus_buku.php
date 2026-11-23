<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_buku WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    echo "Buku berhasil dihapus.";
    header("Location: daftar_buku.php");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>