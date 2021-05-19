<?php
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

function tambah($data)
{
    global $koneksi;
    $id = $_GET['id'];
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

function caribarang($keyword)
{
    $query = "SELECT * FROM barang 
                WHERE Nama_Barang 
                LIKE '%$keyword%' 
                || Jumlah 
                LIKE '%$keyword%'";
    return query($query);
}

// function tampil($id){
//     $data = "SELECT * FROM barang WHERE id = '$id'";

//     return query($data);
// }
