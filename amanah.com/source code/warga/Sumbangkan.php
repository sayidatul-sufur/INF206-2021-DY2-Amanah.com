<?php
include '../tampil/header.php';

$id = $_GET['id'];
$id_Sumbangan = $_GET['id_Sumbangan'];

$data = query("SELECT * FROM barang WHERE id = '$id'");

if (isset($_POST['cari'])) {
    $data = caribarang($_POST["keyword"]);
}

?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
                <a class="nav-link" href="../warga/Daftar_acara.php">
            </li>
                <a class="nav-link" href="Daftar_acara.php">
                    <i class="material-icons">library_books</i>
                    <p>Daftar Acara</p>
                </a>
            </li>
                <a class="nav-link" href="../tampil/aboutUs.php">
            <li class="nav-item ">
                    <i class="material-icons">bubble_chart</i>
                    <p>About Us</p>
                </a>
            </li>
            <li class="nav-item p-5">
                <a class="nav" href="../tampil/logout.php">
                    <i class="ml-5 fa fa-sign-out"></i>
                    <p>Keluar</p>
            </li>
                </a>
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
                    <!-- <form method="post" action="simpan.php?id_Barang=<?= $id; ?>"> -->
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


                                <!-- <td>
                                    <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">simpan</button>
                                </td> -->
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
                        <a href="DaftarBarang.php?id=<?php echo $d['id']; ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Kembali</button>
                        </a>
                        <a href="form.php?id_Sumbangan=<?= $id_Sumbangan; ?>">
                            <button class="btn float-end" style="background-color: rgb(141, 76, 206);">Berikutnya</button>
                        </a>
                    </p>
                    <!-- </form> -->

                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../tampil/footer.php'; ?>