<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/daftar.css'); ?>">
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
    <main>
        <section id="model" class="model">
            <div class="container">
                <div class="kiri">
                    <h1>
                        <span>CAKES AND DESSERT</span>
                        <br>
                    </h1>
                    <p>Where every bite feels like home</p>
                </div>
                <div class="kanan">
                <img src="<?php echo base_url('assets/cake1.jpg'); ?>" alt="Main Photo" class="main-photo"> 
                </div>
            </div>
        </section>
        <div class="container mt-4">
            <h2>Daftar</h2>
            <div class="row">
                <aside class="col-md-3">
                    <div class="categories">
                        <h5>Categories</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Butter cake</li>
                            <li class="list-group-item">Pound cake</li>
                            <li class="list-group-item">Sponge cake</li>
                            <li class="list-group-item">Pie</li>
                        </ul>
                    </div>
                    <div class="top-rated mt-4">
                        <h5>Top Rated</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Risol</li>
                            <li class="list-group-item">Kue Roblox</li>
                            <li class="list-group-item">The weekend</li>
                        </ul>
                    </div>
                </aside>
                <main class="col-md-9">
                    <div class="row">
                        <?php foreach ($cakes as $cake): ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="data:jpeg/jpeg;base64,<?php echo base64_encode($cake['gambar']); ?>" class="card-img-top" alt="<?php echo $cake['nama_kue']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $cake['nama_kue']; ?></h5>
                                    <p class="card-text">Harga: Rp <?php echo number_format($cake['harga'], 2); ?></p>
                                    <p class="card-text">Jumlah: <?php echo $cake['jumlah']; ?></p>
                                    <a href="checkout" class="btn btn-primary">Buy</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </main>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Welcome to Velo Bakery, a delightful bakery shop dedicated to crafting unique and timeless cakes. 
                        We create baked goods that tell a story and capture the essence of sweetness and joy.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Kue</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul>
                        <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copyright">
        <p>&copy; 2023 Lavelora Company. All rights reserved.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
