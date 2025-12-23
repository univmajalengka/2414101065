<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Majalengka - Gerbang Eksotisme Jawa Barat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #2D5A27; /* Hijau alam Majalengka */
            --accent-color: #F4A261;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            color: #333;
            overflow-x: hidden;
        }
        
        html { scroll-behavior: smooth; }

        /* Navbar Styling */
        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(33, 37, 41, 0.9) !important;
            padding: 15px 0;
        }

        /* 1. Hero Banner (Majalengka Specific) */
        .hero-banner {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
                        url('img/herobanner.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -1px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        /* Section Styling */
        .section-title {
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        /* Card Professional Styling */
        .custom-card {
            border: none;
            border-radius: 20px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .custom-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .card-img-wrapper {
            overflow: hidden;
            height: 250px;
        }

        .card-img-wrapper img {
            transition: transform 0.6s ease;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .custom-card:hover .card-img-wrapper img {
            transform: scale(1.15);
        }

        /* Video Section */
        .video-box {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        /* Gallery Grid */
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
            cursor: pointer;
            transition: 0.3s;
        }
        .gallery-img:hover {
            opacity: 0.8;
            transform: scale(0.98);
        }

        footer { background: #1a1c1e; padding: 60px 0 30px; }

        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="bi bi-geo-alt-fill text-warning"></i> EXPLORE MAJALENGKA</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase small fw-bold">
                    <li class="nav-item px-2"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#obyek">Obyek Wisata</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#paket">Paket Wisata</a></li>
                    <li class="nav-item px-2"><a class="nav-link text-warning" href="#gallery">Gallery</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="pemesanan.php">Pemesanan</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="modifikasi_pesanan.php">Daftar Pesanan</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <header id="beranda" class="hero-banner">
        <div class="container text-center">
            <span class="badge bg-warning text-dark px-3 py-2 mb-3 rounded-pill fw-bold">THE EXOTIC WEST JAVA</span>
            <h1 class="hero-title mb-4">Kemilau Majalengka</h1>
            <p class="lead mb-5 px-md-5">Rasakan sensasi berada di wisata alam Majalengka.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#paket" class="btn btn-warning btn-lg px-5 rounded-pill fw-bold shadow">Mulai Petualangan</a>
                <a href="#about" class="btn btn-outline-light btn-lg px-5 rounded-pill fw-bold">Pelajari</a>
            </div>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <div class="position-relative">
                        <img src="img/majalengkaheritage.jpg" class="img-fluid rounded-4 shadow-lg" alt="Majalengka Heritage">
                        <div class="position-absolute bottom-0 end-0 bg-white p-4 shadow rounded-4 translate-middle-y d-none d-md-block" style="width: 250px; margin-bottom: -50px;">                          
                            <p class="small text-muted mb-0">Destinasi wisata alam & budaya yang siap dijelajahi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6 class="text-warning fw-bold text-uppercase">Discover Majalengka</h6>
                    <h2 class="section-title">Kabupaten Seribu Curug</h2>
                    <p class="mt-4 lead text-muted">Majalengka bukan sekadar titik di peta Jawa Barat. Ini adalah simfoni alam di mana pegunungan, lembah, dan air terjun bertemu.</p>
                    <p>Mulai dari kemegahan Gunung Ciremai hingga ketenangan Situ Cipanten, kami menghadirkan layanan UMKM pariwisata yang memudahkan Anda menjelajahi setiap sudut kota angin ini dengan aman dan nyaman.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="obyek" class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title">Destinasi Ikonik</h2>
                <p class="text-muted">Pilihan tempat terbaik yang wajib Anda kunjungi.</p>
            </div>
            <div class="row g-4">
                
                <div class="col-md-4">
                    <a href="https://share.google/1IHE4wAyqieargr3s" target="_blank" class="custom-card card h-100 text-decoration-none text-dark">
                        <div class="card-img-wrapper">
                            <img src="img/situcipanten.jpg" alt="Situ Cipanten">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="fw-bold">Situ Cipanten</h5>
                            <p class="text-muted small">Danau dua warna dengan air kristal jernih yang menjadi primadona Majalengka.</p>
                            <div class="d-flex align-items-center text-warning">
                                <i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://argamukti.desaa.id/artikel/812-menikmati-pesona-muara-jaya-curug-tertinggi-di-majalengka" target="_blank" class="custom-card card h-100 text-decoration-none text-dark">
                        <div class="card-img-wrapper">
                            <img src="img/curugmuarajaya.jpg" alt="Curug Muara Jaya">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="fw-bold">Curug Muara Jaya</h5>
                            <p class="text-muted small">Gemuruh air terjun tertinggi di Majalengka dengan latar belakang tebing eksotis.</p>
                            <div class="d-flex align-items-center text-warning">
                                <i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://bookingciremai.menlhk.go.id/" target="_blank" class="custom-card card h-100 text-decoration-none text-dark">
                        <div class="card-img-wrapper">
                            <img src="img/gunungciremai.webp" alt="Gunung Ciremai">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="fw-bold">Gunung Ciremai</h5>
                            <p class="text-muted small">Menikmati kemegahan Gunung Ciremai yang pemandangan nya indah.</p>
                            <div class="d-flex align-items-center text-warning">
                                <i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section id="paket" class="py-5">
        <div class="container py-4">
            <h2 class="section-title text-center d-block">Paket Wisata Unggulan</h2>
            <p class="text-center text-muted mb-5">Harga kompetitif dengan layanan bintang lima dari mitra UMKM.</p>
            
            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card card h-100 shadow-lg border border-2 border-primary">
                        <div class="card-img-wrapper position-relative">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-3 shadow">BEST SELLER</span>
                            <img src="img/MajalengkaHighland.png" alt="Majalengka Highland">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold">Majalengka Highland</h5>
                            <p class="text-muted small">Panyaweuyan + Situ Cipanten + Makan Siang Khas Sunda</p>
                            <hr>
                            <h3 class="fw-bold text-primary">Rp 450.000 <span class="fs-6 text-muted fw-normal">/pax</span></h3>
                            <a href="pemesanan.php?paket=Majalengka Highland" class="btn btn-primary w-100 mt-3 rounded-pill py-2 shadow-sm">Booking Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="custom-card card h-100 shadow-lg border-0">
                        <div class="card-img-wrapper position-relative">
                            <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow">FAVORIT</span>
                            <img src="img/CurugAdventure.png" alt="Curug Adventure">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold">Curug Adventure</h5>
                            <p class="text-muted small">Curug Muara Jaya + River Tubing + Nasi Liwet</p>
                            <hr>
                            <h3 class="fw-bold text-primary">Rp 350.000 <span class="fs-6 text-muted fw-normal">/pax</span></h3>
                            <a href="pemesanan.php?paket=Curug Adventure" class="btn btn-outline-primary w-100 mt-3 rounded-pill py-2 shadow-sm">Booking Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="custom-card card h-100 shadow-lg border-0">
                        <div class="card-img-wrapper position-relative">
                            <span class="badge bg-dark position-absolute top-0 start-0 m-3 shadow">PREMIUM</span>
                            <img src="img/CiremaiCamping.png" alt="Ciremai Camping">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold">Ciremai Camping</h5>
                            <p class="text-muted small">Camping Gear Lengkap + Guide + BBQ Dinner</p>
                            <hr>
                            <h3 class="fw-bold text-primary">Rp 750.000 <span class="fs-6 text-muted fw-normal">/pax</span></h3>
                            <a href="pemesanan.php?paket=Ciremai Camping" class="btn btn-outline-primary w-100 mt-3 rounded-pill py-2 shadow-sm">Booking Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="gallery" class="py-5 bg-dark text-white">
        <div class="container py-4 text-center">
            <h2 class="section-title text-white mb-5">Multimedia Gallery</h2>
            <div class="row g-4">
                <div class="col-lg-12 mb-4">
                    <div class="video-box shadow-lg">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/c2JIwt6fNzI?si=psa-ZCKrj2pOBlbu" title="Explore Majalengka" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6"><img src="img/situcipanten.jpg" class="gallery-img"></div>
                <div class="col-md-3 col-6"><img src="img/curugmuarajaya.jpg" class="gallery-img"></div>
                <div class="col-md-3 col-6"><img src="img/gunungciremai.webp" class="gallery-img"></div>
                <div class="col-md-3 col-6"><img src="img/rivertubing.webp" class="gallery-img"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h4 class="fw-bold text-white mb-4">EXPLORE MAJALENGKA</h4>
                    <p class="text-secondary small">Aplikasi Capstone Project untuk pemberdayaan UMKM sektor pariwisata di Kabupaten Majalengka, Jawa Barat.</p>
                    <div class="d-flex gap-3 fs-4 text-secondary mt-4">
                        <i class="bi bi-instagram"></i><i class="bi bi-facebook"></i><i class="bi bi-youtube"></i>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-secondary small mb-1">Dibuat untuk:</p>
                    <h6 class="text-white">Tugas Akhir Capstone Project</h6>
                    <p class="small text-secondary mb-0">&copy; 2024 Universitas Majalengka. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>