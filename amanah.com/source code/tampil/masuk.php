<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['id'] = $data['id'];
        // alihkan ke halaman dashboard admin
        header("location:../Admin/dashbordAdmin.php");

        // cek jika user login sebagai pegawai
    } else if ($data['level'] == "user") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        $_SESSION['id'] = $data['id'];
        // alihkan ke halaman dashboard pegawai
        header("location:../warga/dashboard.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:../../index.php?pesan=gagal");
    }
} else {
    header("location:../../index.php?pesan=gagal");
}
