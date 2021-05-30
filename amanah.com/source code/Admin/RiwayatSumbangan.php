<?php
include '../tampil/header.php';
$data = query1("SELECT * FROM sumbangan");

if (isset($_POST['cari'])) {
    $data = cariRiwayat($_POST["keyword"]);
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
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link" href="RiwayatSumbangan.php">
                    <i class="material-icons">history</i>
                    <p>Riwayat Sumbangan</p>
                </a>
            </li>
            <li class="nav-item p-5">
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
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Daftar Sumbangan</th>
                            <th></th>

                        </tr>

                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['Nama']; ?></td>
                                <td><?php echo $d['Alamat']; ?></td>
                                <td><?php echo $d['no_hp']; ?></td>
                                <?php $id = $d['id'];
                                $data1 = query1("SELECT * FROM daftar_acara WHERE id=$id");
                                foreach ($data1 as $d1) {
                                ?>
                                    <td><?php echo $d1['Nama_acara']; ?></td>
                                <?php
                                }
                                ?>
                                <td>
                                    <button class="btn" style="background-color: rgb(141, 76, 206);"><a href="daftarsumbangan.php?id_Barang=<?= $d['id_Barang']; ?>&nama=<?= $d['Nama']; ?>" style="color: white;">Lihat</a></button>
                                </td>
                                <td>
                                    <a href="hapusSumbangan.php?nama=<?= $d['Nama']; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                        </svg>
                                    </a>
                                </td>
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
