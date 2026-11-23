<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_user WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    echo "User berhasil dihapus.";
    header("Location: daftar_user.php");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>