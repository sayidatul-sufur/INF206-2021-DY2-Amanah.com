<?php 
$koneksi = mysqli_connect("localhost", "root", "", "rpl");

$nama = $_POST["nama"];
$katasandi = $_POST["katasandi"];
$nope = $_POST["nope"];
$masuk = mysqli_query($koneksi,"INSERT INTO user VALUES ('','$nama', '$katasandi', '$nope')");

header("location : login.php");

?>