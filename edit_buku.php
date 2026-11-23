<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM tb_buku WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Edit buku</h1>
                <form action="proses_edit_buku.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit:</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $row['penerbit']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun terbit:</label>
                        <input type="date" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok:</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $row['stok']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>