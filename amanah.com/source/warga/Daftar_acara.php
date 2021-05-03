<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
?>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon.png">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Daftar Acara</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="Home.html" class="simple-text logo-normal">
                    AMANAH.com
                </a>
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
                        <a class="nav-link" href="profile.php">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item active">
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
                            <h4 class="card-title">Daftar Acara</h4>
                        </div>
                        <div class="card-body">
                            <div id="typography">
                                <div class="card-title">
                                </div>

                                <table class="table">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Acara</th>
                                        <th scope="col">Tanggal Acara</th>
                                        <th scope="col">Daftar Barang</th>
                                    </tr>
                                    <?php
                                    $data = mysqli_query($koneksi, "select * from daftar_acara");
                                    $no = 1;
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['Nama_acara']; ?></td>
                                                <td><?php echo $d['tanggal_acara'] ?></td>
                                                <td>
                                                    <button class="btn" style="background-color: rgb(141, 76, 206);"><a href="daftarbarang.php" style="color:white; ">Lihat</a></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>

                            </div>
                            <div class="text-right">
                                <br>
                                <button class="btn" style="background-color: rebeccapurple;"><a href="sumbangkan.php" style="color:white; ">SUMBANGKAN</a></button>
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
                                <a>
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
                        <a href="about.php" target="_blank">AMANAH.com</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>