<?php 
//koneksi database
include "koneksi.php";

//menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jurusan = $_POST['jurusan'];

//validasi 
if (empty($nim) || empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($jurusan)) {
    // Jika ada data yang kosong, set notifikasi error dan alihkan ke halaman form
    session_start();
    $_SESSION['error'] = "Semua kolom harus diisi";
    header("location:tambah.php"); 
    exit();
}

//Menginput data yang dikirim dari form
mysqli_query($conn, "insert into data_mahasiswa values('', '$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jurusan')");

session_start();
$_SESSION['notif'] = "Data berhasil ditambhakan";

// mengalihkan halakan kembali ke index
header("location:index.php");

?>