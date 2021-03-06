<?php
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
    die("<script>
    document.location.href = '../../index.php';
  </script>");
}

$lama = 1;
$data = query("SELECT * FROM daftar_acara WHERE DATEDIFF(CURDATE(), tanggal_acara) < $lama");


if (isset($_POST['cari'])) {
    $data = cari($_POST["keyword"]);
}
?>

<div class="sidebar sidebar-primary" data-color="purple" data-background-color="dark" data-image="../../assets/img/logo.jpeg">
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
            <li class="nav-item p-4">
                <a class="nav" href="../tampil/logout.php">
                    <i class="ml-4 fa fa-sign-out"></i>
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
                                        <button class="btn" style="background-color: rgb(141, 76, 206);"><a href="DaftarBarang.php?id=<?php echo $d['id']; ?>" style="color:white; ">Lihat</a></button>
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