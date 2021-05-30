<?php
include '../tampil/header.php';

$id_Barang = $_GET['id_Barang'];
$nama = $_GET['nama'];
$data = query1("SELECT * FROM sumbangan WHERE Nama LIKE '%$nama%'");
// $data = query("SELECT * FROM barang WHERE id = '$id'");

if (isset($_POST['cari'])) {
    $data = cari($_POST["keyword"]);
}
?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="Home.php" class="simple-text logo-normal">
            AMANAH
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="Home.php">
                    <i class="fa fa-home"></i>
                    <p>HOME</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="DaftarAcaraAdmin.php">
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
            <li class="nav-item ">
                <a class="nav-link" href="RiwayatSumbangan.php">
                    <i class="material-icons">history</i>
                    <p>Riwayat Sumbangan</p>
                </a>
            </li>
            <li class="nav-item py-5">
                <a class="nav-link" href="../tampil/login.php">
                    <i class="fa fa-sign-out"></i>
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
                <h4 class="card-title">Daftar Sumbangan</h4>
                <!-- <p class="card-category">Created using Roboto Font Family</p> -->
            </div>
            <div class="card-body">
                <div id="typography">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah Sumbangan</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <?php $id = $d['id_Barang'];
                                $data1 = query1("SELECT * FROM barang WHERE id_Barang=$id");
                                foreach ($data1 as $d1) {
                                ?>
                                    <td><?php echo $d1['Nama_Barang']; ?></td>
                                <?php
                                }
                                ?>
                                <td><?php echo $d['jumlah_sumbangan']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <p class="text-right">
                        <a href="RiwayatSumbangan.php">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Kembali</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>