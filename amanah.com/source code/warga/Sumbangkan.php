<?php
include '../tampil/header.php';

$id = $_GET['id'];

$data = query1("SELECT * FROM barang WHERE id = '$id'");

if (isset($_POST['cari'])) {
    $data = caribarang($_POST["keyword"]);
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
            <li class="nav-item ">
                <a class="nav-link" href="profile.php">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Daftar_acara.php">
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
                                <td></td>
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
                                    <input type="hidden" name="id_barang" value="<?= $d['id_Barang']; ?>">
                                    <input type="hidden" name="Jumlah" value="<?= $d['Jumlah']; ?>">

                                    <td>
                                        <input type="number" name="jumlah_sumbangan" class="form-control text-center" value="0" max="<?= $d['Jumlah']; ?>" min="0" style="width: 50px;">
                                        </input>
                                    </td>
                                    <!-- <td>
                                        <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">simpan</button>
                                    </td> -->
                                </tr>
                            <?php
                            }
                            ?>

                        </table>
                        <p class="text-right">
                            <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">Berikutnya</button>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../tampil/footer.php'; ?>