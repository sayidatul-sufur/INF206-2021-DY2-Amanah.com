<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['id'];
$id = $_POST['id_Barang'];
$nama = $_POST['nama'];
$nama_barang = $_POST['Nama_barang'];
$jum = $_POST['Jumlah'];
$kurang = $_POST['daftar_sumbangan'];
$sum = $jum - $kurang;

mysqli_query($koneksi, "update barang set Jumlah='$sum' where id_Barang='$id'");

// menginput data ke database
mysqli_query($koneksi, "update sumbangan set daftar_sumbangan='$nama_barang = $kurang' where nama='$nama'");


header("location:Daftar_acara.php");
