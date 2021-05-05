<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$namaacara = $_POST['Nama_acara'];
$tan = $_POST['tanggal_acara'];

// menginput data ke database
mysqli_query($koneksi, "insert into daftar_acara values('','$namaacara','$tan')");


header("location:DaftarAcaraAdmin.php");
