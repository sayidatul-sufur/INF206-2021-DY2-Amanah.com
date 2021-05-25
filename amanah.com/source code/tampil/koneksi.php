<?php
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal \n" . mysqli_connect_error();
}
