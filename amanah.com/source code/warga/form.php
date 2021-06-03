<?php
include '../tampil/header.php';
$id_Sumbangan = $_GET['id_Sumbangan'];
//$id = $_GET['id'];
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
            </li>
                </a>
            <li class="nav-item ">
                <a class="nav-link" href="../warga/profile.php">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../warga/Daftar_acara.php">
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
            <div class="card-body">
                <div id="typography">
                    <form method="post" action="form_aksi.php">
                        <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                            <tr>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <td><b>Masukkan NIK</b></td>
                                <td><input type="text" name="nik" value="" class="form-control text-center" required style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Masukkan Nama</b></td>
                                <td><input type="text" name="nama" value="" class="form-control text-center" required style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td><input type="text" name="Alamat" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Nomor Hp</b></td>
                                <td><input type="text" name="nohp" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                        </table>
                        <p class="text-right">
                            <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">Selesai</button>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>