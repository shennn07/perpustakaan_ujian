<?php
require 'DATABASE.php';
$query = mysqli_query($koneksi, "SELECT * FROM barang");

if (!$query) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$total_barang = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Data Barang</h1>
                <p>Total Barang: <?php echo $total_barang; ?></p>
                <a href="tambah_barang.php" class="btn btn-primary mb-3">Tambah Barang</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>kode Barang</th>
                            <th>Nama Barang</th>
                            <th>kategori</th>
                            <th>jumlah</th>
                            <th>kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['kode_barang']; ?></td>
                                <td><?php echo $row['nama_barang']; ?></td>
                                <td><?php echo $row['kategori']; ?></td>
                                <td><?php echo $row['jumlah']; ?></td>
                                <td><?php echo $row['kondisi']; ?></td>
                                <td><a href="edit_barang.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a></td>
                                <td><a href="proses_hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

