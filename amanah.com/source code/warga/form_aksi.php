<?php
// koneksi database
include '../tampil/koneksi.php';
$nik = $_POST['nik'];
// menangkap data yang di kirim dari form
$id_Sumbangan = $_POST['id_Sumbangan'];
$nama = $_POST['nama'];
$alamat = $_POST['Alamat'];
$nohp = $_POST['nohp'];
// menginput data ke database
mysqli_query($koneksi, "update sumbangan set nik = '$nik', Nama='$nama', Alamat='$alamat', no_hp = '$nohp'  where id_Sumbangan like '%$id_Sumbangan%'");


header("location:Daftar_acara.php");
