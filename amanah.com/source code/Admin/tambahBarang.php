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
            <a class="navbar-brand" href="javascript:;">Daftar Acara</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
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
                <form method="post" action="tambah_aksi.php">
					<table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block" >
						<tr>			
							<td><b>Nama Barang</b></td>
							<td><input type="text" name="Nama_Barang" class="form-control text-center" style="color: white;"></td>
						</tr>
						<tr>
							<td><b>Jumlah</b></td>
							<td><input type="number" name="Jumlah" class="form-control text-center" style="color: white;"></td>
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