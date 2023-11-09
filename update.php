<?php 
//koneksi database
include "koneksi.php";

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jurusan = $_POST['jurusan'];



//Meng update data yang dikirim dari form
mysqli_query($conn,"update data_mahasiswa set nim='$nim', nama='$nama',tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jurusan='$jurusan' where id='$id'");

// Set session notifikasi
session_start();
$_SESSION['notif'] = "Data berhasil diupdate";

// mengalihkan halakan kembali ke index
header("location:index.php");

?>