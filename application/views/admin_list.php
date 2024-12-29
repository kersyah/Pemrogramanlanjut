<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Admin List</h1>
        <a href="<?= base_url('index.php/kue') ?>" class="btn btn-primary">Tambah Kue</a>
        <br><br>

        <?php if (!empty($admins)) : ?>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admins as $admin) : ?>
                        <tr>
                            <td><?= $admin->id_admin; ?></td>
                            <td><?= htmlspecialchars($admin->nama_admin); ?></td>
                            <td><?= htmlspecialchars($admin->jabatan); ?></td>
                            <td><?= htmlspecialchars($admin->email_admin); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class="text-danger">No admins found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
