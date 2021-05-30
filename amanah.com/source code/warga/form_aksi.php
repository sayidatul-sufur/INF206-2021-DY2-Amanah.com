<?php
// koneksi database
include '../tampil/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_Sumbangan'];
$nama = $_POST['nama'];
$alamat = $_POST['Alamat'];
$nohp = $_POST['nohp'];
// menginput data ke database
mysqli_query($koneksi, "update sumbangan set Nama='$nama', Alamat='$alamat', no_hp = '$nohp'  where id_Sumbangan like '%$id%'");


header("location:Daftar_acara.php");
