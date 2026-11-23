<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Tambah buku</h1>
                <form action="proses_tambah_buku.php" method="POST">
                    <div class="form-group">
                        <label for="judul">judul:</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">penerbit:</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">tahun terbit:</label>
                        <input type="date" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">stok:</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>