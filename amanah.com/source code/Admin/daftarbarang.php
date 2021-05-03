<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Amanah.com
  </title>

  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      AMANAH.com
    </a></div>
    <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
          <a class="nav-link" href="./Home.html">
            <i class="fa fa-home"></i>
            <p>HOME</p>
          </a>
      </li>
      <li class="nav-item ">
          <a class="nav-link" href="./profile.html">
            <i class="material-icons">person</i>
            <p>Profile</p>
          </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./Daftar_acara.html">
          <i class="material-icons">library_books</i>
          <p>Daftar Acara</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./about.html">
          <i class="material-icons">bubble_chart</i>
          <p>About Us</p>
        </a>
      </li>
      <li class="nav-item py-5">
        <a class="nav-link" href="./login.html">
          <i class="fa fa-sign-out"></i>
          <p>Keluar</p>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Daftar Barang</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" method="post" action="cari.php">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <!-- ini belum bisa jalan -->
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <!-- <a href="cari.php?Nama_Barang=<?php echo $d['id_Barang']; ?>" -->
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nama Acara</h4>
              <!-- <p class="card-category">Created using Roboto Font Family</p> -->
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  <h2>Daftar Barang</h2>
                </div>
                <table class="table">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th class = "text-center" scope="col">Jumlah Barang</th>
                    <th scope="col">Action</th>
                  </tr>
                  <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from barang");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['Nama_Barang']; ?></td>
                      <td class="text-center"><?php echo $d['Jumlah']; ?></td>
                      <td>
                        <a href="edit.php?id_Barang=<?php echo $d['id_Barang']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg> 
                        </a>
                        <a href="hapus.php?id_Barang=<?php echo $d['id_Barang']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                        </svg>
                        </a>
                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                </table>
                <p class="text-right">
                  <a href="tambahBarang.php">
                    <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Tambah Data</button>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a>
                    Creative Tim
                  </a>
                </li>
                <li>
                  <a >
                    About Us
                  </a>
                </li>
                <li>
                  <a>
                    Blog
                  </a>
                </li>
                <li>
                  <a>
                    Licenses
                  </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
             <a href="https://www.instagram.com/rezaanggaputraa" target="_blank">Reza Angga Putra</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>