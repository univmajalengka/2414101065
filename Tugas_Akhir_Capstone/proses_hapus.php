<?php
// 1. Sertakan koneksi database
include 'koneksi.php';

// 2. Ambil ID dari URL (id didapat dari tombol hapus di modifikasi_pesanan.php)
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 3. Perintah SQL untuk menghapus data berdasarkan ID
    $query = "DELETE FROM pesanan WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        // 4. Jika berhasil, arahkan kembali ke daftar pesanan dengan status 'deleted'
        header("Location: modifikasi_pesanan.php?status=deleted");
        exit;
    } else {
        // Jika gagal karena error database
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    // Jika ID tidak ditemukan di URL
    header("Location: modifikasi_pesanan.php");
    exit;
}
?>