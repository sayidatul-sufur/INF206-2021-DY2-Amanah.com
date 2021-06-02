<?php
session_start();
include '../tampil/header.php';

$id = $_GET['id'];
$id_Sumbangan = $_GET['id_Sumbangan'];

$data = query("SELECT * FROM barang WHERE id = '$id'");

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
                <a class="nav-link" href="dashboard.php">
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
                <h4 class="card-title">Daftar Barang</h4>
            </div>
            <div class="card-body">
                <div id="typography">
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
                                <!-- menyimpan jumlah barang yang disumbangkan -->
                                <td>
                                    <a href="SumbangBarang.php?id_Barang=<?php echo $d['id_Barang']; ?>&id_Sumbangan=<?= $id_Sumbangan; ?>">
                                        <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">pilih</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                    <p class="text-right">
                        <!-- tombol Kembali -->
                        <a href="DaftarBarang.php?id=<?php echo $d['id']; ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Kembali</button>
                        </a>
                        <!-- tombol Berikutnya -->
                        <a href="form.php?id_Sumbangan=<?= $id_Sumbangan; ?>">
                            <button class="btn float-end" style="background-color: rgb(141, 76, 206);">Berikutnya</button>
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../tampil/footer.php'; ?>