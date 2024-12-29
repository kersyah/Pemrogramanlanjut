<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kue</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Kue</h1>
        <a href="<?= base_url('index.php/tambah_kue') ?>" class="btn btn-success mb-3">Tambah Kue</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kue</th>
                    <th>Jumlah</th>
                    <th>ID Admin</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($kue)) : ?>
                    <?php foreach ($kue as $item) : ?>
                        <tr>
                            <td><?= $item->id_kue; ?></td>
                            <td><?= htmlspecialchars($item->nama_kue); ?></td>
                            <td><?= $item->jumlah; ?></td>
                            <td><?= $item->id_admin; ?></td>
                            <td><?= number_format($item->harga, 2); ?></td>
                            <td>
                                <?php if (!empty($item->gambar)) : ?>
                                    <img src="data:image/jpeg;base64,<?= base64_encode($item->gambar); ?>" alt="Gambar Kue" style="width: 100px; height: auto;">
                                <?php else : ?>
                                    Tidak ada gambar
                                <?php endif; ?>
                            </td>
                            <td>
                            <td>
    <a href="<?= base_url('index.php/edit/index/' . $item->id_kue) ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="<?= base_url('index.php/delete_kue/index/' . $item->id_kue) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
</td>

</td>

                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="text-center text-danger">Tidak ada data kue.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
