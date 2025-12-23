<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id      = $_POST['id']; // Mengambil ID dari input hidden
    $nama    = $_POST['nama'];
    $paket   = $_POST['paket'];
    $tanggal = $_POST['tanggal'];
    $peserta = $_POST['peserta'];
    $hp      = $_POST['hp'];

    // Perintah SQL Update
    $query = "UPDATE pesanan SET 
              nama='$nama', 
              paket='$paket', 
              tanggal='$tanggal', 
              peserta='$peserta', 
              hp='$hp' 
              WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: modifikasi_pesanan.php?status=updated");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}
?>