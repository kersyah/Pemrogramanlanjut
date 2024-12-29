<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velo Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Quicksand:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        * {
    padding: 0;
    box-sizing: border-box;
}
:root {
    --primary-color: #C6E7FF; 
    --light-red: #FFDDAE; 
    --primary-black: #111; 
    --gray: #D4F6FF; 
    --background-color: #FBFBFB; 
    --biru: #3D7EA6; 
}

/*utama*/
body{
    font-family: 'Lucida Bright', serif;
    background-color: var(--primary-color);
     color: var(--primary-black);
     overflow-x: hidden;
}
a {
    text-decoration: none;
    color: inherit;
}
section .container{
    width: 1130px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
}

.kiri,
.kanan{
    width: 50%;
    padding: 1rem;
    display: flex;
}
/*navbar */
header{
    padding:0 1rem ;

}

.navbar{
    max-width: 1200px;
    margin: 0 auto;
    padding: 1.5rem 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar .logo{
    font-size: 2rem;
    color: var(--primary-black);

}

.navbar .logo span{
    color: #4A628A;
    font-weight: bold;
}
.navbar .links{
    list-style: none;
    display: flex;
    gap: 2rem;
}
.navbar .links a {
    font-size: 1.5rem; 
    color: #333;
    text-decoration: none; 
    transition: color 0.3s ease, transform 0.3s ease; 
}

.navbar .links a:hover {
    color: var(--primary-color); 
    transform: scale(1.1); 
}

/*display*/
.model {
 padding: 4rem 0;
}

.model .kiri{
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}

.model h1{
    font-size: 5rem;
    text-transform: capitalize;
    font-weight: 300;

    line-height: 5.5rem;
}
.model h1 span{
    color: var(--biru);
}

.model p {
    font-size: 1rem;
    line-height: 2;
    margin: 2rem 0;
}
.model a{
    display: inline-block;
    padding: 1rem  3rem;
    font-size: 1rem;
    text-transform: uppercase;
    color: #fff;
    background-color: var(--biru);
    letter-spacing: 2px;
    font-weight: bold;
    border-radius: 30px;
}
.model a:hover{
    background-color: var(--primary-black);
}
.kanan {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
    padding: 3rem;
}

.main-photo {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.main-photo:active {
    transform: scale(1.1);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

.bubble-images {
    position: absolute;
    display: flex;
    flex-direction: column; 
    gap: 2rem; 
    top: 5%; 
    right: 5%; 
}
.bubble-photo {
    width: 80px; 
    height: 80px; 
    border-radius: 50%; 
    object-fit: cover; 
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); 
    background-color: white; 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
}

#bubble1 {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    margin-left: 10px;
    position: absolute;
    top: -20px;
    left: -30px;
    margin-left: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#bubble2 {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    position: absolute;
    bottom: -30px;
    right: -50px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.bubble-photo:active {
    transform: scale(1.2);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

/*kotak*/
.kue {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    text-align: center;
}

.kue h2 {
    font-size: 1.8em;
    color: #3D7EA6;
    margin-bottom: 20px;
    font-family: 'Lucida Bright', serif;
}

.carousel {
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.carousel-track {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    gap: 20px;
    padding: 20px 0;
}

.kue-card {
    min-width: 250px;
    max-width: 250px;
    background-color: white;
    box-shadow: inset;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.kue-card img {
    width: 100%;
    height: 120px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

.kue-card h3 {
    color: #3D7EA6;
    font-size: 1.2em;
    margin: 10px 0;
}

.kue-card p {
    color: #5C969E;
    font-size: 0.9em;
    margin-bottom: 5px;
}
.icon-link {
    text-decoration: none; 
    display: inline-block; 
    font-size: 2rem; 
    color: #3D7EA6;
    margin-top: 20px; 
    transition: color 0.3s ease, transform 0.3s ease; 
}

.icon-link:hover {
    color: #FF6347; 
    transform: scale(1.1); 
}
.carousel-btn {
    border: none;
    color: white;
    font-size: 24px;
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
}

.carousel-btn.left {
    left: 10px;
}

.carousel-btn.right {
    right: 10px;
}

.carousel-track {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    gap: 20px;
    padding: 20px 0;
    scrollbar-width: none;
}

.carousel-track::-webkit-scrollbar {
    display: none; 
}
/* komenslide */
.komenslide {
    margin-top: 10px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 80%;
    max-width: 900px;
    overflow: hidden; 
    position: relative;
}

.komenslide h2{
    font-family: 'Lucida Bright', serif;
    padding-bottom: 1rem;
    padding-top: 20px;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out; 
    width: 100%;
}

.slide {
    min-width: 100%; 
    flex-shrink: 0;
    text-align: center;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.slide img {
    width: 80px; 
    height: 80px; 
    border-radius: 50%; 
    object-fit: cover; 
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); 
    margin: 0 auto; 
}


.navigation {
    display: flex; 
    justify-content: center; 
    gap: 10px; 
    margin-top: 15px; 
}
.nav-btn {
    width: 12px;
    height: 12px;
    background: #ccc;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s ease;
}
.nav-btn.active {
    background: #333; 
}
/*quotes*/
.quotes {
    padding-top: 40px; 
    padding-bottom: 40px; 
    margin-top: 20px; 
    text-align: center; 
}

/* Footer Styling */
.footer {
    background-color: var(--biru); 
    color: #fff; 
    padding: 40px 20px; 
    margin-top: 40px;
    list-style: none;
    display: flex;
}

.footer h5 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
    color: var(--gray); 
}

.footer p {
    font-size: 14px;
    line-height: 1.6;
    color: #ccc; 
}

.footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer ul li {
    margin-bottom: 10px;
}

.footer ul li a {
    color: #FFD700; 
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease;
}

.footer ul li a:hover {
    color: #fff; 
    text-decoration: underline;
}


.footer ul li a i {
    margin-right: 8px;
    font-size: 16px;
}


.footer-copyright {
    background-color: #000;
    color: #aaa;
    text-align: center;
    padding: 15px 0;
    font-size: 12px;
    border-top: 1px solid #222; 
}

.footer-copyright p {
    margin: 0;
}

    </style>
</head>
</head>
<body>  
<header>
    <nav class="navbar">
        <a href="#" class="logo">Velo <span>Bakery</span></a>
        <ul class="links">
            <li><a href="<?= base_url('index') ?>" class="nav-icon"><i class="bi bi-house-door"></i></a></li>
            <li><a href="<?= base_url('index.php/daftar') ?>" class="nav-icon"><i class="bi bi-plus-circle"></i></a></li>
            <li><a href="<?= base_url('index/HistoryPembayaran') ?>"><i class="bi bi-info-circle"></i></a></li>
            <li><a href="<?= base_url('logout') ?>" class="nav-icon"><i class="bi bi-box-arrow-right"></i></a></li>
        </ul>
    </nav>    
</header>
    <main>
        <section id="model" class="model">
            <div class="container">
                <div class="kiri">
                    <h1>
                        <span>Quality</span>
                        <br>
                    </h1>
                    <p>Temukan manisnya kebahagiaan di toko kue kami, 
                        tempat setiap gigitan memberikan kenangan istimewa</p>
                    <a href="daftar">View menu</a>
                </div>
                <div class="kanan">
                <img src="<?php echo base_url('assets/cake1.jpg'); ?>" alt="Main Photo" class="main-photo"> 
                <div class="bubble-images">
                <img src="<?php echo base_url('assets/cake2.jpg'); ?>" alt="Bubble Photo 1" class="bubble-photo">
                <img src="<?php echo base_url('assets/cake.jpg'); ?>" alt="Bubble photo 2" class="bubble-photo">
                </div>
                </div>
            </div>
        </section>
        <section class="kue" id="kue">
            <h2>DAFTAR KUE</h2>
            <p>kue kue enak terbaru</p>
            <div class="carousel">
        <button class="carousel-btn left" onclick="scrollLeft()">&#10094;</button>
        <div class="carousel-track" id="carousel-track">
            <?php foreach ($cakes as $cake): ?>
            <div class="kue-card">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($cake['gambar']); ?>" alt="<?php echo $cake['nama_kue']; ?>">
                <h3><?php echo $cake['nama_kue']; ?></h3>
                <p><strong>Jumlah: </strong><?php echo $cake['jumlah']; ?></p>
                <p><strong>Harga: </strong>Rp <?php echo number_format($cake['harga'], 2); ?></p>
                <a href="<?= base_url('index.php/daftar') ?>" class="icon-link">
                    <i class="bi bi-bag-plus"></i>
                </a>
            </div>
            <?php endforeach; ?>
                </div>
                <button class="carousel-btn right" onclick="scrollRight()">&#10095;</button>
            </div>
        </section>
        <section class="quotes" id="quotes">
            <figure class="text-center">
                <blockquote class="blockquote">
                  <p>Makanlah sebelum kamu dimakamkan.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  velo <cite title="Source Title">Source Title</cite>
                </figcaption>
              </figure>
        </section>
        <div class="img-fluid py-5">
        <img src="<?php echo base_url('assets/Vintage.png'); ?>" class="d-block w-100" alt="...">
        </div>
        <section class="komenslide">
            <h2>Riview Customer</h2>
            <div class="slides">
                <div class="slide">
                <img src="<?php echo base_url('assets/hafiz.jpg'); ?>" alt="Profile">
                    <div class="text-content">
                        <p>Hafiz</p>
                        <p>ENAK BENER LE</p>
                    </div>
                </div>
                <div class="slide">
                <img src="<?php echo base_url('assets/kemas.jpg'); ?>" alt="Profile">
                    <div class="text-content">
                        <p>Kemas</p>
                        <p>Mantap le</p>
                    </div>
                </div>
                <div class="slide">
                <img src="<?php echo base_url('assets/yoga.jpg'); ?>" alt="Profile">
                    <div class="text-content">
                        <p>Yoga</p>
                        <p>Gacor king</p>
                    </div>
                </div>
                <div class="slide">
                <img src="<?php echo base_url('assets/rangga.jpg'); ?>" alt="Profile">
                    <div class="text-content">
                        <p>Rangga</p>
                        <p>Yoi le</p>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
        </section>
        <section id="footer">
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
                      <li><a href="#">Riview</a></li>
                      <li><a href="#">Menu</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul>
                      <li><a href="#" target="_blank"><i class="bi bi-facebook"></i> Facebook</a></li>
                      <li><a href="#" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></li>
                      <li><a href="#" target="_blank"><i class="bi bi-twitter"></i> Twitter</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
            </section>
            <div class="footer-copyright">
              <p>&copy; 2023 Lavelora Company. All rights reserved.</p>
            </div>
    </main>
    <script>
        document.querySelectorAll('.bubble-photo, .main-photo').forEach(photo => {
            photo.addEventListener('mousedown', () => {
                photo.style.transform = 'scale(1.2)';
                photo.style.boxShadow = '0 6px 15px rgba(0, 0, 0, 0.3)';
            });
            photo.addEventListener('mouseup', () => {
                photo.style.transform = 'scale(1)';
                photo.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.2)';
            });
        });

        const slides = document.querySelector('.slides');
        const navButtons = document.querySelectorAll('.nav-btn');
        let currentIndex = 0;
        const totalSlides = document.querySelectorAll('.slide').length;

        function updateSlider(index) {
            slides.style.transform = `translateX(-${index * 100}%)`; 
            navButtons.forEach(btn => btn.classList.remove('active'));
            navButtons[index].classList.add('active');
        }

        navButtons.forEach((btn, idx) => {
            btn.addEventListener('click', () => {
                currentIndex = idx;
                updateSlider(currentIndex);
            });
        });

        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides; 
            updateSlider(currentIndex);
        }, 5000);
    </script>
</body>
</html>