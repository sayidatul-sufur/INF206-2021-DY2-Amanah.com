<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['Nama_acara'];
$tanggal = $_POST['tanggal_acara'];

// menginput data ke database
mysqli_query($koneksi, "insert into daftar_acara values('','$nama','$tanggal')");

// mengalihkan halaman kembali ke index.php
header("location:DaftarAcaraAdmin.php");
