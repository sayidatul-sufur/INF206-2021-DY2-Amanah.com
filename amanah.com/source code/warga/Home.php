<?php
include '../tampil/header.php';
?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

  <div class="logo"><a href="Home.php" class="simple-text logo-normal">
      AMANAH
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active">
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
      <li class="nav-item">
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
      <li class="nav-item p-5">
        <a class="nav-link" href="login.php">
          <i class="fa fa-sign-out"></i>
          <p>Keluar</p>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="main-panel">

  <div id="slider">

    <div class="container" style="width: 940px; height: 423px;">

      <div class="p-5" id="slider_box" style="right :200px; top : 120px;">
        <img src="../../assets/img/slide.png">
        <img src="../../assets/img/slide2.jpg">
        <img src="../../assets/img/Neon Fruity Business Facebook Ad.png">
        <img src="../../assets/img/slide 5.jpg">
      </div>
    </div>
  </div>

</div>
</div>

<?php
include '../tampil/footer.php';
?>