<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - Explore Majalengka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-dark: #1a3316;
            --accent-green: #2D5A27;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: #f0f2f5;
        }

        .header-section {
            background: linear-gradient(135deg, var(--primary-dark), var(--accent-green));
            padding: 50px 0 80px;
            color: white;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .card-container {
            margin-top: -50px;
            margin-bottom: 50px;
        }

        .custom-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            background: white;
        }

        .table thead th {
            background: #f8f9fa;
            border: none;
            padding: 15px;
            font-size: 0.85rem;
            text-transform: uppercase;
            color: #666;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        .btn-action {
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="header-section text-center">
        <div class="container">
            <h2 class="fw-bold"><i class="bi bi-journal-text me-2"></i>Manajemen Pesanan</h2>
            <p class="opacity-75 small">Pantau dan kelola jadwal trip Anda di Majalengka</p>
        </div>
    </div>

    <div class="container card-container">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <?php if(isset($_GET['status'])): ?>
                    <?php 
                        $status = $_GET['status'];
                        $msg = ""; $type = "";
                        if($status == 'success') { $msg = "Pesanan baru berhasil ditambahkan!"; $type = "success"; }
                        elseif($status == 'updated') { $msg = "Perubahan data berhasil disimpan!"; $type = "info"; }
                        elseif($status == 'deleted') { $msg = "Pesanan telah berhasil dihapus."; $type = "danger"; }
                    ?>
                    <div class="alert alert-<?= $type ?> alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4">
                        <i class="bi bi-info-circle-fill me-2"></i> <?= $msg ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <div class="card custom-card overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Pelanggan</th>
                                    <th>Paket</th>
                                    <th>Tanggal</th>
                                    <th>Peserta</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php 
    include 'koneksi.php';
    $sql = "SELECT * FROM pesanan ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0): 
        while($row = mysqli_fetch_assoc($result)): 
    ?>
    <tr>
        <td>
            <div class="fw-bold"><?= $row['nama'] ?></div>
            <div class="text-muted small"><?= $row['hp'] ?></div>
        </td>
        <td><span class="badge bg-success"><?= $row['paket'] ?></span></td>
        <td><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
        <td><?= $row['peserta'] ?> Orang</td>
        <td class="text-center">
            <a href="edit_pesanan.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
            <a href="proses_hapus.php?id=<?= $row['id'] ?>" 
   class="btn btn-sm btn-outline-danger" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">
   Hapus
</a>
        </td>
    </tr>
    <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="5" class="text-center py-4">Belum ada data di database.</td></tr>
    <?php endif; ?>
</tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <a href="index.php" class="btn btn-link w-100 text-muted mt-2 text-decoration-none small">Kembali ke Beranda</a>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>