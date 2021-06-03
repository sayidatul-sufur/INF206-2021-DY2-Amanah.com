<?php
include '../tampil/header.php';

//$id = $_GET['id'];
$no = $_GET['id_Barang'];
$id_Sumbangan = $_GET['id_Sumbangan'];
$data = query("SELECT * from barang where id_Barang='$no'");


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
                <a class="nav-link" href="dashboardAdmin.php">
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
                <a class="nav-link" href="RiwayatSumbangan.php">
                    <i class="material-icons">history</i>
                    <p>Riwayat Sumbangan</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="../tampil/aboutUs.php">
                    <i class="material-icons">bubble_chart</i>
                    <p>About Us</p>
                </a>
            </li>
            <li class="nav-item p-4">
                <a class="nav" href="../tampil/logout.php">
                    <i class="ml-4 fa fa-sign-out"></i>
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
                <h4 class="card-title">Pilih Barang</h4>
                <!-- <p class="card-category">Created using Roboto Font Family</p> -->
            </div>
            <div class="card-body">
                <div id="typography">
                    <?php
                    foreach ($data as $d) {
                    ?>
                        <form method="post" action="simpan.php">
                            <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                                <tr>
                                    <td><b>Nama Barang</b></td>
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                        <input type="hidden" name="id_Barang" value="<?php echo $d['id_Barang']; ?>">
                                        <input type="hidden" name="id_Sumbangan" value="<?php echo $id_Sumbangan; ?>">
                                        <input type="hidden" name="Jumlah" value="<?php echo $d['Jumlah']; ?>">
                                        <input type="text" name="Nama_Barang" class="form-control text-center" style="color: white;" value="<?php echo $d['Nama_Barang']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Jumlah</b></td>
                                    <td><input type="number" name="jumlah_sumbangan" class="form-control text-center" style="color: white;" value="0" max="<?= $d['Jumlah']; ?>" min="0"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <!-- tombol simpan -->
                                    <td><button class="btn" type="submit" name="submit" style="background-color: rgb(141, 76, 206);">SIMPAN</button></td>
                                </tr>
                            </table>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php' ?>