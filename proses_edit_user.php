<?php
require 'koneksi.php';

$id = (int) $_POST['id'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

// Validasi input
if (empty($email) || empty($pass) || empty($nama) || empty($kelas)) {
    die("Semua field harus diisi.");
}
// Query untuk memperbarui data user di database
$query = "UPDATE tb_user SET email = '$email', pass = '$pass', nama = '$nama', kelas = '$kelas' WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    echo "User berhasil diperbarui.";
    header("Location: daftar_user.php"); // Redirect ke halaman index setelah berhasil memperbarui
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>