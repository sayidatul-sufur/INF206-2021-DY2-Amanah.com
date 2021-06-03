<?php

include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
    die("<script>
    document.location.href = '../../index.php';
  </script>");
}

$id = $_GET['id'];

$data = query("SELECT * FROM barang where id=$id");

if (isset($_POST['cari'])) {
    $data = caribarang($_POST["keyword"]);
}
?>

<div class="sidebar sidebar-primary" data-color="purple" data-background-color="dark" data-image="../../assets/img/logo.jpeg">
    <div class="logo"><a href="dashboard.php" class="simple-text logo-normal">
            <img src="../../assets/img/logo.png" width="60" height="60" class="rounded">Amanah.com</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-home"></i>
                    <p>Home</p>
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
                <!-- <p class="card-category">Created using Roboto Font Family</p> -->
            </div>
            <div class="card-body">
                <div id="typography">
                    <table class="table">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th class="text-center" scope="col">Jumlah Barang</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['Nama_Barang']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php $id_Sumbangan = 'AMN' . MYSQLI_TYPE_DATE . rand(1, 1000); ?>
                    <p class="text-right">
                        <a href="Daftar_acara.php?id=<?php echo $d['id']; ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Kembali</button>
                        </a>
                        <a href="Sumbangkan.php?id=<?php echo $d['id'] ?>&id_Sumbangan=<?= $id_Sumbangan; ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Sumbangkan</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>