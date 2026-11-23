<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM tb_user WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Edit User</h1>
                <form action="proses_edit_user.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="text" class="form-control" id="pass" name="pass" value="<?php echo $row['pass']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>