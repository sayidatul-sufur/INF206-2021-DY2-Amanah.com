<!DOCTYPE html>
<html lang="en">
<?php
require '../tampil/function.php';
?>

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
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="Home.php" class="simple-text logo-normal">
                    <img src="../../asset/img/favicon.png" width="60" height="60" class="rounded">Amanah.com</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../tampil/Home.php">
                            <i class="fa fa-home"></i>
                            <p>HOME</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../warga/profile.php">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../warga/Daftar_acara.php">
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
                    <li class="nav-item py-5">
                        <a class="nav" href="login.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="ml-5 fa fa-sign-out"></i>
                            <p>Keluar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Daftar Acara</a>
                    </div>
                    <div>
                        <button class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">notifications</i>
                        </button>
                    </div>
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
            <script src="../../asset/js/plugins/sweetalert2.js"></script>