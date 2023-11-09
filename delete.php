<?php
include "koneksi.php";

// Mengambil ID yang dikirimkan melalui URL
$id = $_GET['id'];

// Menghapus data berdasarkan ID
mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id='$id'");

// Set session notifikasi
session_start();
$_SESSION['notif'] = "Data berhasil dihapus";

// Mengalihkan halaman kembali ke index
header("location:index.php");
?>
