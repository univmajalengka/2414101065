<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data lama dari database
$query = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

// Jika ID tidak ditemukan, balikkan ke daftar
if (!$data) {
    header("Location: modifikasi_pesanan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pesanan - Explore Majalengka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f4f7f6; padding-top: 50px; }
        .card-edit { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .btn-update { background: #2D5A27; color: white; border-radius: 10px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-edit p-4 p-md-5">
                    <h3 class="fw-bold mb-4 text-center">Update Pesanan</h3>
                    
                    <form action="proses_edit.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Paket Wisata</label>
                            <select name="paket" class="form-select" required>
                                <option value="Majalengka Highland" <?= ($data['paket'] == 'Majalengka Highland') ? 'selected' : '' ?>>Majalengka Highland</option>
                                <option value="Curug Adventure" <?= ($data['paket'] == 'Curug Adventure') ? 'selected' : '' ?>>Curug Adventure</option>
                                <option value="Ciremai Camping" <?= ($data['paket'] == 'Ciremai Camping') ? 'selected' : '' ?>>Ciremai Camping</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tanggal Trip</label>
                                <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal'] ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Jumlah Peserta</label>
                                <input type="number" name="peserta" class="form-control" value="<?= $data['peserta'] ?>" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nomor WhatsApp</label>
                            <input type="tel" name="hp" class="form-control" value="<?= $data['hp'] ?>" required>
                        </div>

                        <button type="submit" class="btn btn-update w-100 py-3 mb-2">Simpan Perubahan</button>
                        <a href="modifikasi_pesanan.php" class="btn btn-light w-100">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>