<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kue</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Kue</h1>

        <!-- Form Tambah Kue -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_kue" class="form-label">Nama Kue</label>
                <input type="text" name="nama_kue" id="nama_kue" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="id_admin" class="form-label">ID Admin</label>
                <input type="number" name="id_admin" id="id_admin" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" step="0.01" name="harga" id="harga" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('kue') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
