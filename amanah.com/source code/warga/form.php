<?php
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
    die("<script>
    document.location.href = '../../index.php';
  </script>");
}

$id_Sumbangan = $_GET['id_Sumbangan'];
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
            <div class="card-body">
                <div id="typography">
                    <form method="post" action="form_aksi.php">
                        <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                            <tr>
                                <td><b>NIK</b></td>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="id_Sumbangan" value="<?php echo $id_Sumbangan; ?>">
                                <td><input type="number" name="nik" value="" class="form-control text-center" required style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td><input type="text" name="nama" value="" class="form-control text-center" required style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td><input type="text" name="Alamat" class="form-control text-center" required style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Nomor Hp/WA</b></td>
                                <td><input type="number" name="nohp" class="form-control text-center" required style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
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