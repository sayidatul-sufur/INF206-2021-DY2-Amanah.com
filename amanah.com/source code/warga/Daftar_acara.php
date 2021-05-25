<?php
include '../tampil/header.php';

$data = query("SELECT * FROM daftar_acara");

if (isset($_POST['cari'])) {
    $data = cari($_POST["keyword"]);
}
?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="Home.php" class="simple-text logo-normal">
            AMANAH.com
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="Home.php">
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
                        $no = 1;
                        foreach ($data as $d) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['Nama_acara']; ?></td>
                                    <td><?php echo $d['tanggal_acara'] ?></td>
                                    <td>
                                        <button class="btn" style="background-color: rgb(141, 76, 206);"><a href="daftarbarang.php?id=<?php echo $d['id']; ?>" style="color:white; ">Lihat</a></button>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>

                </div>

            </div>


        </div>
    </div>
</div>

<?php include '../tampil/footer.php'; ?>