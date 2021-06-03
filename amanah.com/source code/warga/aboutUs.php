<?php
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
  die("<script>
  document.location.href = '../../index.php';
</script>");
}

?>



<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
      <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="material-icons">person</i>
          <p>Profile</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Daftar_acara.php">
          <i class="material-icons">library_books</i>
          <p>Daftar Acara</p>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="aboutUs.php">
          <i class="material-icons">bubble_chart</i>
          <p>About Us</p>
        </a>
      </li>
      <li class="nav-item p-5">
        <a class="nav-link" href="../tampil/logout.php">
          <i class="fa fa-sign-out"></i>
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
          <div class="card" style="background-image: url('../../assets/img/backround.jpeg'); background-size: cover; background-position: top center;">

            <div class="card-body">
              <div class="card-header card-header-primary">
                <section class="u-align-center u-clearfix u-section-1 text-center" id="carousel_ba5b">
                  <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                      <div class="u-layout">
                        <div class="u-layout-row">
                          <div class="u-container-style u-layout-cell u-left-cell u-size-59 u-layout-cell-1">
                            <di class="u-container-layout u-valign-middle-xs u-container-layout-1">
                              <div class="u-palette-2-light-2 u-shape u-shape-circle u-shape-1"></div>
                              <h2 class="u-text u-text-1">About Team</h2>
                              <p class="u-text u-text-2">Tim kami terbentuk untuk melakukan projek Rekayasa Perangkat Lunak (RPL) yang dimana website ini bertujuan untuk menunjang kegiatan di desa dalam bentuk teknologi sebagai inovasi yang memudahkan kegiatan di desa. Terutama dalam kegiatan&nbsp;penyumbangan barang&nbsp;untuk&nbsp;acara di desa.</p>
                          </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-1 u-layout-cell-2">
                          <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>