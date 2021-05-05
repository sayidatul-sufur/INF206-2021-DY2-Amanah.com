<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data id yang di kirim dari url
$no = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi, "delete from daftar_acara where id='$no'");


// mengalihkan halaman kembali ke index.php
header("location:DaftarAcaraAdmin.php");
