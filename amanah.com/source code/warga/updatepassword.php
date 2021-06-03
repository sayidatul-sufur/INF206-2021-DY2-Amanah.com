<?php

include '../tampil/header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
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
      <li class="nav-item  ">
        <a class="nav-link" href="./dashboard.php">
            <i class="material-icons">dashboard</i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="./profile.php">
            <i class="material-icons">person</i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./daftaracara.php">
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
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
         
        </div>
      </nav>
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
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                        <input type="text" value="" class="form-control" placeholder="Masukkan Password Lama">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <input type="text" value="" class="form-control" placeholder="Masukkan Password Baru">
                        </div>
                      </div>  
                      </div>
                    <a type="submit" class="btn btn-primary pull-right" href="profile.php">Simpan</a>
                    <a type="submit" class="btn btn-primary pull-right" href="profile.php">kembali</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>   
    </div>
  </div>
</body>

</html>