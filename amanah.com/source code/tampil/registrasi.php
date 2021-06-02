<?php
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

$nama = $_POST["nama"];
$katasandi = $_POST["katasandi"];
$nope = $_POST["nope"];

mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nama', '$katasandi', '$nope')");

header("location : login.php");
