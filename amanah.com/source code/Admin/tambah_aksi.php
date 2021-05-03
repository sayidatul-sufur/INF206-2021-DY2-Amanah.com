<?php  
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$namaBarang = $_POST['Nama_Barang'];
$sum = $_POST['Jumlah'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('','$namaBarang','$sum')");
 

header("location:daftarbarang.php");
 
?>