<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$i = 0;
$no = $_POST['id'];
$id = $_POST['id_barang'];
$jum = $_POST['Jumlah'];
$kurang = $_POST['jumlah_sumbangan'];
$sum = $jum - $kurang;
$id_Sumbangan = 'AMN' . MYSQLI_TYPE_DATE . rand(1, 1000);

mysqli_query($koneksi, "update barang set Jumlah='$sum' where id_Barang='$id'");

// menginput data ke database
mysqli_query($koneksi, "insert into sumbangan  (id,id_Sumbangan,id_Barang,jumlah_sumbangan) values('$no','$id_Sumbangan','$id','$kurang')");


header("location:form.php?id_sumbangan=$id_Sumbangan");
