<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM tb_pinjam WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Edit peminjaman</h1>
                <form action="proses_edit_pinjam.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="id_user">ID User:</label>
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $row['id_user']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="id_buku">ID Buku:</label>
                        <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $row['id_buku']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam:</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali:</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $row['jumlah']; ?>" readonly required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>