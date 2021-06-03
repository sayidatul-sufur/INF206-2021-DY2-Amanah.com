<?php

// $id = $_GET['id'];
// $data = query("SELECT * from user where id='$id' ");
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
    die("<script>
    document.location.href = '../../index.php';
  </script>");
}


?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="dashboard.php" class="simple-text logo-normal">
            <img src="../../assets/img/logo.png" width="60" height="60" class="rounded">Amanah.com</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item  ">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="profile.php">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item ">
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
<div class="main-panel">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Data Anda</h4>
                        </div>
                        <div class="card-body">

                            <?php
                            $tampilPeg    = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_SESSION[id]'");
                            $d    = mysqli_fetch_array($tampilPeg);
                            ?>

                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama : </label>

                                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                            <input type="text" name="username" class="form-control text-center" value="<?php echo $d['username']; ?>" disabled>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">No Hp :</label>

                                            <input type="text" name="no_hp" class="form-control text-center" value="<?php echo $d['no_hp']; ?>" disabled>

                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">E-mail :</label>

                                            <input type="text" name="no_hp" class="form-control text-center" value="<?php echo $d['email']; ?>" disabled>

                                        </div>
                                    </div>

                                </div>

                                <label>tekan update jika mengubah data anda</label>
                                <div>
                                    <a type="submit" class="btn btn-primary pull-right" href="ubahpassword.php?id=<?php echo $d['id'] ?> & username=<?php echo $d['username'] ?>">
                                        Update Password
                                    </a>
                                    <a type="submit" class="btn btn-primary pull-right" href="updateprofile.php?id=<?php echo $d['id'] ?>">
                                        Update Profile
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>

        </html>