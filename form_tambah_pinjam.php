<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Tambah peminjaman</h1>
                <form action="proses_tambah_pinjam.php" method="POST">
                    <div class="form-group">
                        <label for="id_user">ID User:</label>
                        <select name="id_user" id="id_user" class="form-select" required>
                            <option value="">Pilih User</option>
                                <?php
                                    $user_query = "SELECT * FROM tb_user";
                                    $user_result = mysqli_query($koneksi, $user_query);
                                    while ($user = mysqli_fetch_assoc($user_result)) {
                                    echo "<option value='{$user['id']}'>{$user['nama']}</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_buku">ID Buku:</label>
                        <select name="id_buku" id="id_buku" class="form-select" required>
                            <option value="">Pilih Buku</option>
                                <?php
                                    $buku_query = "SELECT * FROM tb_buku";
                                    $buku_result = mysqli_query($koneksi, $buku_query);
                                    while ($buku = mysqli_fetch_assoc($buku_result)) {
                                    echo "<option value='{$buku['id']}'>{$buku['judul']}</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam:</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali:</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>