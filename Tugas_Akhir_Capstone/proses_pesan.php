<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $hp       = $_POST['hp'];
    $paket    = $_POST['paket'];
    $tanggal  = $_POST['tanggal'];
    $peserta  = $_POST['peserta'];

    $query = "INSERT INTO pesanan (nama, email, hp, paket, tanggal, peserta) 
              VALUES ('$nama', '$email', '$hp', '$paket', '$tanggal', '$peserta')";

    if (mysqli_query($conn, $query)) {
        header("Location: modifikasi_pesanan.php?status=success");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>