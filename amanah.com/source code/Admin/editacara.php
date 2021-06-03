<?php
include '../tampil/header.php';
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
                <h4 class="card-title">Edit Acara</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <div class="card-title">
                    </div>
                    <?php
                    $no = $_GET['id'];
                    $data = mysqli_query($koneksi, "select * from daftar_acara where id='$no'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" action="updateacara.php">
                            <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                                <tr>
                                    <td><b>Nama Acara</b></td>
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                        <input type="text" name="Nama_acara" class="form-control text-center" style="color: white;" value="<?php echo $d['Nama_acara']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Acara</b></td>
                                    <td><input type="date" name="tanggal acara" class="form-control text-center" style="color: white;" value="<?php echo $d['tanggal_acara']; ?>"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="btn" type="submit" style="background-color: rgb(141, 76, 206);">SIMPAN</button></td>
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

<?php include '../tampil/footer.php'; ?>