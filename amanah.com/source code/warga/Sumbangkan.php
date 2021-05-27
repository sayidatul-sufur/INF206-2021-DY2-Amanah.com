<?php
include '../tampil/header.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];

$alamat = $_POST['Alamat'];
$nohp = $_POST['nohp'];
$nik = $_POST['nik'];
$data = cek($nik);
if (count($data)===0) {
    echo "<script>
            alert('nik tidak terdaftar');
        document.location.href = 'form.php?id=$id';
        </script>";
    exit;
}elseif(strtolower($nama) !== strtolower($data[0]['nama_warga'])){
    echo "<script>
    alert('Nama tidak terdaftar');
    document.location.href = 'form.php?id=$id';
</script>";
exit;
}
$data = query1("SELECT * FROM barang WHERE id = '$id'");

if (isset($_POST['cari'])) {
    $data = caribarang($_POST["keyword"]);
}
// menginput data ke database
mysqli_query($koneksi, "insert into sumbangan (id,nik,Nama,Alamat,no_hp) values('$id','$nik','$nama','$alamat','$nohp')");

?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
    <script></script>
    <div class="logo"><a href="Home.php" class="simple-text logo-normal">
            AMANAH.com
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="Home.php">
                    <i class="fa fa-home"></i>
                    <p>HOME</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="../warga/profile.php">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../warga/Daftar_acara.php">
                    <i class="material-icons">library_books</i>
                    <p>Daftar Acara</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="aboutUs.php">
                    <i class="material-icons">bubble_chart</i>
                    <p>About Us</p>
                </a>
            </li>
            <li class="nav-item py-5">
                <a class="nav" href="login.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="ml-5 fa fa-sign-out"></i>
                    <p>Keluar</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Daftar Barang</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <form method="post" action="simpan.php">
                        <table class="table">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Sumbangan</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($data as $d) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $d['Nama_Barang']; ?></td>
                                    <td><?= $d['Jumlah']; ?></td>
                                    <input type="hidden" name="id" value="<?= $d['id']; ?>">
                                    <input type="hidden" name="nama" value="<?= $nama; ?>">
                                    <input type="hidden" name="id_Barang" value="<?= $d['id_Barang']; ?>">
                                    <input type="hidden" name="Jumlah" value="<?= $d['Jumlah']; ?>">
                                    <input type="hidden" name="Nama_barang" value="<?= $d['Nama_Barang']; ?>">
                                    <td><input type="number" name="daftar_sumbangan" class="form-control text-center" style="color: black; width: 25%" value="0" max="<?= $d['Jumlah']; ?>" min="0"></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>

                        <p class="text-right">
                            <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">Selesai</button>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>