<?php
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
  die("<script>
  document.location.href = '../../index.php';
</script>");
}

$id = $_GET['id'];
$data = query("SELECT * from user where id='$id'");

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
              <h4 class="card-title">Update</h4>
            </div>
            <div class="card-body">

              <?php
              $tampilPeg    = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_SESSION[id]'");
              $d    = mysqli_fetch_array($tampilPeg);
              ?>

              <form method="post" action="upaction.php">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama :</label>
                      <input type="text" name="username" class="form-control text-center" value="<?php echo $d['username']; ?>">
                      <input type="hidden" name="id" class="form-control text-center" value="<?php echo $d['id']; ?>">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">No Hp :</label>
                      <input type="text" name="no_hp" class="form-control text-center" value="<?php echo $d['no_hp']; ?>">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">E-mail :</label>
                      <input type="text" value="" name="email" class="form-control" placeholder="Masukkan email">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                <a class="btn btn-primary pull-right" href="profile.php">kembali</a>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>

    </html>