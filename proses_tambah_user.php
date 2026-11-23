<?php
require 'koneksi.php';


$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

// Validasi input
if (empty($email) || empty($password) || empty($role) || empty($nama) || empty($kelas)) {
    die("Semua field harus diisi.");
}
// Query untuk menambahkan data user ke database
$query = "INSERT INTO tb_user (email, pass, role, nama, kelas) VALUES ('$email', '$password', '$role', '$nama', '$kelas')";

if (mysqli_query($koneksi, $query)) {
    echo "User berhasil ditambahkan.";
    header("Location: daftar_user.php"); // Redirect ke halaman index setelah berhasil menambahkan
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>