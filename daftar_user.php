<?php
require 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tb_user");

if (!$query) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$total_user = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Data User</h1>
                <p>Total User: <?php echo $total_user; ?></p>
                <a href="form_tambah_user.php" class="btn btn-primary mb-3">Tambah User</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>email</th>
                            <th>role</th>
                            <th>nama</th>
                            <th>kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['kelas']; ?></td>
                                <td><a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a></td>
                                <td><a href="hapus_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>