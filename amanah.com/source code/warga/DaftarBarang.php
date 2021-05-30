<?php
include '../tampil/header.php';

$id = $_GET['id'];

$data = query1("SELECT * FROM barang where id=$id");

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
                <h4 class="card-title">Nama Acara</h4>
                <!-- <p class="card-category">Created using Roboto Font Family</p> -->
            </div>
            <div class="card-body">
                <div id="typography">
                    <div class="card-title">
                        <h2>Daftar Barang</h2>
                    </div>
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
                    <p class="text-right">
                        <a href="Daftar_acara.php?id=<?php echo $d['id']; ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Kembali</button>
                        </a>
                        <a href="Sumbangkan.php?id=<?php echo $d['id'] ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Sumbangkan</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>