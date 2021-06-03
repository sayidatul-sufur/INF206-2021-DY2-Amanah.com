<?php
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
  die("<script>
  document.location.href = '../../index.php';
</script>");
}

$id = $_GET['id'];
$no = $_GET['id_Barang'];
$data = query("SELECT * from barang where id_Barang='$no'");

if (isset($_POST["submit"])) {
  if (update($_POST) > 0) {
    echo "
      <script>
        // alert('data berhasil diubah');
        document.location.href = 'daftarbarang.php?id=$id';
      </script>
    ";
  } else {
    echo "
      <script>
        // alert('data gagal diubah');
        document.location.href = 'daftarbarang.php?id=$id';
      </script>
    ";
  }
}

?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
  <div class="logo"><a href="dashbordAdmin.php" class="simple-text logo-normal">
      <img src="../../assets/img/logo.png" width="60" height="60" class="rounded">Amanah.com</a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboardAdmin.php">
          <i class="fa fa-home"></i>
          <p>Home</p>
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
        <a class="nav-link" href="aboutUsAdmin.php">
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

<!-- End Navbar -->

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Edit Barang</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p> -->
      </div>
      <div class="card-body">
        <div id="typography">
          <?php
          foreach ($data as $d) {
          ?>
            <form method="post" action="">
              <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                <tr>
                  <td><b>Nama Barang</b></td>
                  <td>
                    <input type="hidden" name="id_Barang" value="<?php echo $d['id_Barang']; ?>">
                    <input type="text" name="Nama_Barang" class="form-control text-center" style="color: white;" value="<?php echo $d['Nama_Barang']; ?>">
                  </td>
                </tr>
                <tr>
                  <td><b>Jumlah</b></td>
                  <td><input type="number" name="Jumlah" class="form-control text-center" style="color: white;" value="<?php echo $d['Jumlah']; ?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><button class="btn" type="submit" name="submit" style="background-color: rgb(141, 76, 206);" data-toggle="modal" data-target="#myModal">SIMPAN</button></td>
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
<?php include '../tampil/footer.php' ?>