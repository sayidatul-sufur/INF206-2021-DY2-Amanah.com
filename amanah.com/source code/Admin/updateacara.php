<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['id'];
$namaacara = $_POST['Nama_acara'];
$tan = $_POST['tanggal_acara'];

// update data ke database
mysqli_query($koneksi, "update daftar_acara set Nama_acara='$namaacara', tanggal_acara='$tan' where id='$no'");

// mengalihkan halaman kembali ke index.php
header("location:DaftarAcaraAdmin.php");
