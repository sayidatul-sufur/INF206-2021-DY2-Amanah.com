<?php

include '../tampil/koneksi.php';

    $no    = $_POST['id'];
    $nama  = $_POST['username'];
    $nope  = $_POST['no_hp'];
    $email = $_POST['email'];

    // update data ke database
     $query = "update user set username='$nama', no_hp='$nope', email='$email' where id='$no'";

    mysqli_query($koneksi, $query);

    header("location:profile.php ");
