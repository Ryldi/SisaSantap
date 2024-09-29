<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisa Santap</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<nav class="navbar navbar-expand-lg bs-none">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand col-2" href="#"><img src="{{ asset('img/Logo.png') }}" alt="" width="150"></a>
        <div class="collapse navbar-collapse col-10">
            <ul class="navbar-nav ms-4 gap-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto gap-4">
                <li class="nav-item">
                    <a class="btn rounded-pill px-4" href="#">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="btn rounded-pill px-4" href="#">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active slide-1">
            <div class="container">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <div>
                        <h1 class="display-4 text-white fw-bold">Sisa Tak Terbuang, Rasa Tetap Terjaga</h1>
                        <a href="#" class="btn btn-lg btn-primary mt-4">Lihat Makanan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item slide-2">
            <div class="container" style="background-image: url('path-to-image2.jpg'); background-size: cover; height: 500px;">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <div>
                        <h1 class="display-4 text-white">Ciptakan Makanan Tanpa Sisa</h1>
                        <a href="#" class="btn btn-lg btn-secondary mt-4">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item slide-3">
            <div class="container" style="background-image: url('path-to-image3.jpg'); background-size: cover; height: 500px;">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <div>
                        <h1 class="display-4 text-white">Selamatkan Makanan, Selamatkan Dunia</h1>
                        <a href="#" class="btn btn-lg btn-success mt-4">Ayo Beraksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</section>


<section class="about-section">
    <div class="col milk-layer">
        <h1 class="fw-bold text-center text-dark pb-4">Tentang Kami</h1>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('img/Logo.png') }}" class="img-fluid" alt="SISA Santap Logo">
            </div>
            <div class="col-8 text-dark fw-bold">
                SisaSantap.com, platform inovatif yang berdedikasi untuk mengurangi limbah makanan dan menghadirkan solusi cerdas bagi para pecinta kuliner. Kami percaya bahwa makanan sisa memiliki potensi yang luar biasa dan seharusnya tidak terbuang sia-sia. Dengan misi untuk menyediakan makanan berkualitas dengan harga terjangkau, kami berkomitmen untuk menciptakan pengalaman berbelanja yang bermanfaat bagi Anda dan juga lingkungan.
                <br><br>
                Kami berupaya menciptakan komunitas yang peduli, di mana setiap orang dapat berpartisipasi dalam misi besar ini. Mari bergabung bersama kami untuk menyelamatkan rasa, mengurangi limbah, dan menciptakan masa depan yang lebih baik melalui pilihan makanan yang bijak.
            </div>
        </div>
    </div>
</section>

<!-- Terlaris Minggu Ini Section -->
<section class="best-sellers py-5 bg-light">
    <div class="container text-center">
        <h2>Terlaris Minggu Ini</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="path-to-dunkin-donuts-logo.png" class="img-fluid" alt="Dunkin Donuts">
            </div>
            <div class="col-md-4">
                <img src="path-to-jco-logo.png" class="img-fluid" alt="JCO">
            </div>
            <div class="col-md-4">
                <img src="path-to-mcdonalds-logo.png" class="img-fluid" alt="McDonald's">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-4 bg-light">
    <div class="container text-center">
        <p>&copy; 2024 SisaSantap.com. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#">Instagram</a> |
            <a href="#">Facebook</a> |
            <a href="#">Twitter</a>
        </div>
    </div>
</footer>
