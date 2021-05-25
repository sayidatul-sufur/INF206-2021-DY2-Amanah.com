<?php
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal \n" . mysqli_connect_error();
}
<<<<<<< HEAD
=======


function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword)
{
    $query = "SELECT * FROM daftar_acara 
                WHERE Nama_acara
                LIKE '%$keyword%' 
                || tanggal_acara
                LIKE '%$keyword%'";
    return query($query);
}
>>>>>>> DaftarBarang
