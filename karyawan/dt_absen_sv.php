<?php
include '../koneksi.php';
error_reporting(0);
date_default_timezone_set('Asia/Jakarta'); // Set zona waktu ke Waktu Indonesia Barat (WIB)

// Mulai session
session_start();

// Mendapatkan data POST dari form
$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi']; // Menambahkan lokasi dari form

// Query untuk menyimpan data absen ke dalam database
$sql = "INSERT INTO tb_absen (id_karyawan, nama, waktu, lokasi) VALUES ('$id_karyawan', '$nama', '$waktu', '$lokasi')";

if (mysqli_query($koneksi, $sql)) {
    // Jika berhasil disimpan, set pesan ke session
    $_SESSION['pesan_absen'] = "Anda sudah absen untuk hari ini.";
    echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
    echo "<script>window.location.href = \"index.php?m=awal\" </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
