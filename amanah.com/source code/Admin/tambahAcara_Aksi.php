<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$nama = htmlspecialchars($_POST['Nama_acara']);
$tanggal = htmlspecialchars($_POST['tanggal_acara']);

// menginput data ke database
mysqli_query($koneksi, "insert into daftar_acara values('','$nama','$tanggal')");

// mengalihkan halaman kembali ke index.php
header("location:send.php?namaacara=$nama");
