<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pemesanan.css'); ?>">
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
        <form id="checkoutForm" action="<?php echo site_url('checkout/process_payment'); ?>" method="post">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>ID Pesanan :</span>
                        <!-- Input for user's ID -->
                        <input type="text" id="idUser" name="id_user" placeholder="Enter your user ID" required>
                        <div class="invalid-feedback">ID User is required.</div>
                    </div>
                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" id="userName" name="userName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Full name is required.</div>
                    </div>
                    
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" id="email" name="email" placeholder="example@example.com" required>
                        <div class="invalid-feedback">Email is required.</div>
                    </div>
                    <div class="inputBox">
                        <span>Jumlah :</span>
                        <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah kue" required>
                        <div class="invalid-feedback">Jumlah is required.</div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                        <span>Nama kue :</span>
                        <input type="text" id="nama_kue" name="nama_kue" required>
                        <div class="invalid-feedback">nama kue.</div>
                    </div>
                    <div class="inputBox">
                        <span>Metode Pembayaran :</span>
                        <input type="text" id="metode" name="metode" placeholder="Layanan" required>
                        <div class="invalid-feedback">Metode is required.</div>
                    </div>
                    <div class="inputBox">
                        <span>Total :</span>
                        <input type="text" id="total" name="total" placeholder="Rp." required>
                    </div>
                    <div class="inputBox">
                        <span>Cards Accepted :</span>
                        <img src="pembayaran.png" alt="Cards Accepted">
                    </div>
                </div>
            </div>

            <button id="mybtn" class="btn btn-primary btn-lg btn-block" type="submit">
                Proses pembayaran
            </button>
        </form>
    </div>
</body>
</html>
