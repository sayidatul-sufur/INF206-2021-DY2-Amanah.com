<?php include '../tampil/header.php'; ?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="Home.php" class="simple-text logo-normal">
            AMANAH.com
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
                <a class="nav-link" href="../Admin/profileAdmin.php">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../Admin/DaftarAcaraAdmin.php">
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
                <h4 class="card-title">Tambah Acara</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <div class="card-title">
                    </div>
                    <form method="post" action="tambahacara_aksi.php">
                        <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                            <tr>
                                <td><b>Nama acara</b></td>
                                <td><input type="text" name="Nama_acara" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Acara</b></td>
                                <td><input type="date" name="tanggal_acara" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button value="SIMPAN" class="btn float-end mt-2" style="background-color: rgb(141, 76, 206);">Simpan</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../tampil/footer.php' ?>