<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Tiket - Explore Majalengka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: #f8f9fa;
            color: #333;
        }
        .booking-header {
            background: linear-gradient(rgba(45, 90, 39, 0.8), rgba(45, 90, 39, 0.9)), 
                        url('img/herobanner.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .card-booking {
            border: none;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-top: -50px;
        }
        .btn-reserve {
            background-color: #2D5A27;
            color: white;
            font-weight: 700;
            border-radius: 12px;
            padding: 12px;
            transition: 0.3s;
        }
        .btn-reserve:hover {
            background-color: #1e3d1a;
            color: white;
            transform: translateY(-3px);
        }
        .form-control:focus, .form-select:focus {
            border-color: #2D5A27;
            box-shadow: 0 0 0 0.25rem rgba(45, 90, 39, 0.25);
        }
    </style>
</head>
<body>

    <header class="booking-header text-center">
        <div class="container">
            <h1 class="fw-extrabold shadow-sm">Formulir Reservasi</h1>
            <p class="lead">Wujudkan petualangan impian Anda di Kota Angin</p>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-booking p-4 p-md-5 bg-white">
                    
                    <?php
                    // Logika PHP Sederhana untuk menangani form
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = htmlspecialchars($_POST['nama']);
                        $paket = htmlspecialchars($_POST['paket']);
                        $tanggal = htmlspecialchars($_POST['tanggal']);
                        
                        echo "
                        <div class='alert alert-success border-0 rounded-4 p-4 mb-4 shadow-sm animate__animated animate__fadeIn'>
                            <div class='d-flex align-items-center'>
                                <i class='bi bi-check-circle-fill fs-1 me-3'></i>
                                <div>
                                    <h5 class='fw-bold mb-1'>Pesanan Berhasil Dikirim!</h5>
                                    <p class='mb-0 small'>Halo <b>$nama</b>, admin kami akan segera menghubungi Anda untuk konfirmasi paket <b>$paket</b> pada tanggal $tanggal.</p>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>

                    <form action="proses_pesan.php" method="POST">
                        <div class="row g-3">
                            <h4 class="fw-bold mb-3"><i class="bi bi-person-badge text-success me-2"></i>Informasi Pribadi</h4>
                            
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="name@example.com" required>
                                    <label for="email">Alamat Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control rounded-3" id="hp" name="hp" placeholder="0812xxx" required>
                                    <label for="hp">Nomor WhatsApp</label>
                                </div>
                            </div>

                            <hr class="my-4 text-muted">

                            <h4 class="fw-bold mb-3"><i class="bi bi-geo-alt text-success me-2"></i>Detail Perjalanan</h4>

                            <?php
// Tangkap data paket dari URL jika ada
$paket_pilihan = isset($_GET['paket']) ? $_GET['paket'] : '';
?>

<div class="mb-3">
    <label class="form-label fw-bold">Pilih Paket Wisata</label>
    <select name="paket" class="form-select" required>
        <option value="">-- Pilih Paket --</option>
        <option value="Majalengka Highland" <?php if($paket_pilihan == 'Majalengka Highland') echo 'selected'; ?>>Majalengka Highland</option>
        <option value="Curug Adventure" <?php if($paket_pilihan == 'Curug Adventure') echo 'selected'; ?>>Curug Adventure</option>
        <option value="Ciremai Camping" <?php if($paket_pilihan == 'Ciremai Camping') echo 'selected'; ?>>Ciremai Camping</option>
    </select>
</div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control rounded-3" id="tanggal" name="tanggal" required>
                                    <label for="tanggal">Tanggal Keberangkatan</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control rounded-3" id="peserta" name="peserta" min="1" placeholder="1" required>
                                    <label for="peserta">Jumlah Peserta</label>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-reserve w-100 py-3 shadow">
                                    <i class="bi bi-send-fill me-2"></i>Kirim Permintaan Reservasi
                                </button>
                                <a href="index.php" class="btn btn-link w-100 text-muted mt-2 text-decoration-none small">Kembali ke Beranda</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>