<?php
<<<<<<< HEAD
include 'koneksi.php';

function query1($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
=======
include '../tampil/koneksi.php';

// function query($query)
// {
//     global $koneksi;
//     $result = mysqli_query($koneksi, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
//     return $rows;
// }
>>>>>>> DaftarBarang

function tambah($data)
{
    global $koneksi;
<<<<<<< HEAD
    $id = $data['id'];
=======
    $id = $_GET['id'];
>>>>>>> DaftarBarang
    $namaBarang = htmlspecialchars($data['Nama_Barang']);
    $sum = htmlspecialchars($data['Jumlah']);
    $query = "INSERT INTO barang
                 VALUES
            ('','$id','$namaBarang','$sum')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;

    $query = "delete from barang where id_Barang='$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function update($id)
{
    global $koneksi;

    $no = $id['id_Barang'];
    $namaBarang = $id['Nama_Barang'];
    $sum = $id['Jumlah'];

    // update data ke database
    $query = "update barang set Nama_Barang='$namaBarang', Jumlah='$sum' where id_Barang='$no'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

<<<<<<< HEAD
function cari1($keyword)
=======
function caribarang($keyword)
>>>>>>> DaftarBarang
{
    $query = "SELECT * FROM barang 
                WHERE Nama_Barang 
                LIKE '%$keyword%' 
                || Jumlah 
                LIKE '%$keyword%'";
<<<<<<< HEAD
    return query1($query);
}

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

function updatejumlah($id)
{
    global $koneksi;

    $no = $id['id_Barang'];
    $namaBarang = $id['Nama_Barang'];
    $arr = $id['daftar_sumbangan'];
    $sum = $id['Jumlah'] - $arr;

    // update data ke database
    $query = "update barang set Nama_Barang='$namaBarang', Jumlah='$sum' where id_Barang='$no'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
=======
    return query($query);
}

// function tampil($id){
//     $data = "SELECT * FROM barang WHERE id = '$id'";

//     return query($data);
// }
>>>>>>> DaftarBarang
