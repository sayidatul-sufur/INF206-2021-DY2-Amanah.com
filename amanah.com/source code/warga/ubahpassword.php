<?php
include '../tampil/header.php';

if (!isset($_SESSION['username'])) {
    die("<script>
    document.location.href = '../../index.php';
  </script>");
}

$id = $_GET['id'];

$username = $_GET['username'];

?>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

if (isset($_POST['Ganti'])) {
    $username        = $_POST['username'];
    $password_lama    = md5($_POST['password_lama']);
    $password_baru    = md5($_POST['password_baru']);
    $konf_password    = md5($_POST['konf_password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password_lama'";
    $sqli = mysqli_query($koneksi, $query);
    $hasil = mysqli_num_rows($sqli);
    if (!$hasil >= 1) {
?>
        <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali ;)');
            document.location = 'profile.php';
        </script>
<?php
        unset($_SESSION['username']);
        unset($_SESSION['hak_akses']);
        session_destroy();
    } else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
        echo "<h3><font color=red>Ganti Password Gagal! Data Tidak Boleh Kosong.</font></h3>";
    } else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
        echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";
    } else {
        $query = "UPDATE user SET password='$password_baru' WHERE username='$username'";
        $sqli = mysqli_query($koneksi, $query);
        if ($sqli) {
            echo "<h3><font color=#00ffb7><center>Ganti Password Berhasil!</center></font></h3>";
        } else {
            echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";
        }
    }
}
?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="dashboard.php" class="simple-text logo-normal">
            <img src="../../assets/img/logo.png" width="60" height="60" class="rounded">Amanah.com</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item  ">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item active  ">
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
<div class="main-panel">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Ubah Password</h4>
                        </div>
                        <div class="card-body">

                            <?php
                            $tampilPeg = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_SESSION[id]'");
                            $d = mysqli_fetch_array($tampilPeg);
                            ?>

                            <form action="#" method="POST" name="ubah-password" enctype="multipart/form-data">
                                <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr height="36">
                                        <td>Password Lama</td>
                                        <td><input type="password" name="password_lama" id="password_lama" size="30" maxlength="20"></td>
                                        <td><input type="hidden" name="username" id="password_lama" value="<?php echo $username  ?>"></td>

                                    </tr>
                                    <tr height="36">
                                        <td>Password Baru</td>
                                        <td><input type="password" name="password_baru" id="password_baru" size="30" maxlength="20"></td>
                                    </tr>
                                    <tr height="36">
                                        <td>Konfirm Password Baru</td>
                                        <td><input type="password" name="konf_password" id="konf_password" size="30" maxlength="20"></td>
                                    </tr>
                                    <!-- <tr height="56">
                                        <td><a class="btn btn-primary pull-right" href="profile.php">kembali</a></td>
                                        <td><button type="submit" class="btn btn-primary pull-right" name="Ganti" value="Ganti">Simpan</button></td>
                                    </tr> -->
                                </table>
                                <button type="submit" class="btn btn-primary pull-right" name="Ganti" value="Ganti">Simpan</button>
                                <a class="btn btn-primary pull-right" href="profile.php">kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>

        </html>