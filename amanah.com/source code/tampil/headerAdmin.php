<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Amanah.com
    </title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../asset/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../../asset/img/sidebar-1.jpg">
            <div class="logo"><a href="Home.php" class="simple-text logo-normal">
                    <img src="../../asset/img/favicon.png" width="60" height="60" class="rounded">Amanah.com</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">
                            <i class="fa fa-home"></i>
                            <p>HOME</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../Admin/profileAdmin.php">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../Admin/DaftarAcaraAdmin.php">
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
                    <li class="nav-item ">
                        <a class="nav-link" href="../Admin/RiwayatSumbangan.php">
                            <i class="material-icons">history</i>
                            <p>Riwayat Sumbangan</p>
                        </a>
                    </li>
                    <li class="nav-item py-5">
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
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form" method="post" action="">
                            <div class="input-group no-border">
                                <input type="text" name="keyword" value="" class="form-control" placeholder="Search..." autofocus>
                                <button type="submit" name="cari" class="btn btn-white btn-round btn-just-icon" autocomplete="">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>