<?php
include 'koneksi.php';

$nama = $_POST["username"];
$katasandi = $_POST["katasandi"];
$nope = $_POST["nope"];
$level = "user";
$masuk = mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nama', md5('$katasandi'), '$nope', '$level')");

header('location:login.php');
