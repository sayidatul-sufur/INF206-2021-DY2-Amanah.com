<?php
include '../tampil/header.php';
$data = query("SELECT * FROM sumbangan");

if (isset($_POST['cari'])) {
    $data = cariRiwayat($_POST["keyword"]);
}
?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="">
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
            <li class="nav-item">
                <a class="nav-link" href="DaftarAcaraAdmin.php">
                    <i class="material-icons">library_books</i>
                    <p>Daftar Acara</p>
                </a>
            </li>
            <li class="nav-item active">
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
                <h4 class="card-title">Riwayat Sumbangan</h4>
                <!-- <p class="card-category">Created using Roboto Font Family</p> -->
            </div>
            <div class="card-body">
                <div id="typography">
                    <div class="card-title">
                    </div>
                    <table class="table">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Daftar Sumbangan</th>
                        </tr>

                        <?php
                        $no = 1;
                        $id_Sumbangan = "";
                        foreach ($data as $d) {
                        ?>
                            <tr>
                                <?php
                                $sekarang = $d['id_Sumbangan'];
                                if ($sekarang == $id_Sumbangan) {
                                    continue;
                                }
                                ?>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['Nama']; ?></td>
                                <td><?php echo $d['Alamat']; ?></td>
                                <td><?php echo $d['no_hp']; ?></td>
                                <td>
                                    <button class="btn" style="background-color: rgb(141, 76, 206);"><a href="daftarsumbangan.php?id_Barang=<?= $d['id_Barang']; ?>&id_Sumbangan=<?= $d['id_Sumbangan']; ?>" style="color: white;">Lihat</a></button>
                                </td>
                                <?php $id_Sumbangan = $d['id_Sumbangan']; ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../tampil/footer.php';
