<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM daftar_acara WHERE id='$id'");


// mengalihkan halaman kembali ke index.php
header("location:DaftarAcaraAdmin.php");
