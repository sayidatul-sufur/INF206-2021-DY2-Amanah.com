<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['id'];
$id = $_POST['id_Barang'];
$jum = $_POST['Jumlah'];
$kurang = $_POST['jumlah_sumbangan'];
$sum = $jum - $kurang;
$id_Sumbangan = $_POST['id_Sumbangan'];

mysqli_query($koneksi, "update barang set Jumlah='$sum' where id_Barang='$id'");

// menginput data ke database
mysqli_query($koneksi, "insert into sumbangan (id,id_Sumbangan,id_Barang,jumlah_sumbangan) values('$no','$id_Sumbangan','$id','$kurang')");


header("location:Sumbangkan.php?id=$no&id_Sumbangan=$id_Sumbangan");
