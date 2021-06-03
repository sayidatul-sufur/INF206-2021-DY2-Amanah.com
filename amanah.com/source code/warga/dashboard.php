<?php
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
      <li class="nav-item  active ">
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

<div id="slider">

  <div class="container" style="width: 940px; height: 423px;">

    <div class="mt-5" id="slider_box" style="top: 85px;">
      <img src="../../assets/img/slide.png">
      <img src="../../assets/img/slide2.jpg">
      <img src="../../assets/img/3.jpeg">
      <img src="../../assets/img/slide 5.jpg">
    </div>
  </div>
</div>



</div>
</div>

<?php include '../tampil/footer.php'; ?>
</body>

</html>