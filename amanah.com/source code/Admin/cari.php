//ini belum jalan

<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$no = $_GET['id_Barang'];


// menghapus data dari database
mysqli_query($koneksi,"delete from barang where id_Barang='$no'");


// mengalihkan halaman kembali ke index.php
header("location:daftarbarang.php");

?>