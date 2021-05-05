<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['id_Barang'];
$namaBarang = $_POST['Nama_Barang'];
$sum = $_POST['Jumlah'];

// update data ke database
mysqli_query($koneksi,"update barang set Nama_Barang='$namaBarang', Jumlah='$sum' where id_Barang='$no'");

// mengalihkan halaman kembali ke index.php
header("location:daftarbarang.php");

?>