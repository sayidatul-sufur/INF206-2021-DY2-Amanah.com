<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data id yang di kirim dari url
$nama = $_GET['nama'];


// menghapus data dari database
mysqli_query($koneksi, "delete from sumbangan where nama like '%$nama%'");


// mengalihkan halaman kembali ke index.php
header("location:RiwayatSumbangan.php");
