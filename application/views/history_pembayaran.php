<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pembayaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pembayaran.css'); ?>">

</head>
<body>

<header>
    <nav class="navbar">
        <a href="#" class="logo">Velo <span>Bakery</span></a>
        <ul class="links">
            <li><a href="<?= base_url('index') ?>" class="nav-icon"><i class="bi bi-house-door"></i></a></li>
            <li><a href="<?= base_url('index.php/daftar') ?>" class="nav-icon"><i class="bi bi-plus-circle"></i></a></li>
            <li><a href="<?= base_url('index.php/HistoryPembayaran') ?>"><i class="bi bi-info-circle"></i></a></li>
            <li><a href="<?= base_url('logout') ?>" class="nav-icon"><i class="bi bi-box-arrow-right"></i></a></li>
        </ul>
    </nav>    
</header>

<div class="container">
    <h2 class="text-center">History Pembayaran</h2>
    <ul class="list-group mt-4">
        <?php if (!empty($payments)) : ?>
            <?php foreach ($payments as $payment) : ?>
                <li class="list-group-item">
                    <strong>Tanggal:</strong> <?= htmlspecialchars($payment['tanggal']) ?><br>
                    <strong>Nama:</strong> <?= htmlspecialchars($payment['nama']) ?><br>
                    <strong>Email:</strong> <?= htmlspecialchars($payment['email']) ?><br>
                    <strong>Jumlah:</strong> <?= htmlspecialchars($payment['jumlah']) ?> kue<br>
                    <strong>Metode Pembayaran:</strong> <?= htmlspecialchars($payment['metode']) ?><br>
                    <strong>Total:</strong> Rp. <?= number_format($payment['total'], 0, ',', '.') ?><br>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <li class="list-group-item">No payment history found.</li>
        <?php endif; ?>
    </ul>
    <div class="text-center">
        <button class="btn btn-primary mt-4" onclick="location.href='<?= base_url('index.php') ?>'">Kembali ke Halaman Utama</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
