<?php
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal \n" . mysqli_connect_error();
}
$lama = date('Y-m-d');
$query = "DELETE FROM Daftar_acara
          WHERE DATEDIFF(CURDATE(), tanggal_acara) < $lama";
$hasil = mysqli_query($koneksi, $query);
