<?php
include '../tampil/header.php';
$id = $_GET['id'];

$username=$_GET['username'];

?>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

if (isset($_POST['Ganti'])) {
    $username        = $_POST['username'];
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konf_password    = $_POST['konf_password'];
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password_lama'";
    $sql = mysqli_query($koneksi, $query);
    $hasil = mysqli_num_rows($sql);
    if (!$hasil >= 1) {
?>
        <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali ;)');
            document.location = 'index.php';
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
        $query = "UPDATE login SET password='$password_baru' WHERE username='$username'";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            echo "<h3><font color=#00ffb7><center>Ganti Password Berhasil!</center></font></h3>";
        } else {
            echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";
        }
    }
}
?>

     <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

            <div class="logo"><a href="Home.php" class="simple-text logo-normal">
                    Amanah.com
                </a></div>
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
        </div>     <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

<div class="logo"><a href="Home.php" class="simple-text logo-normal">
        Amanah.com
    </a></div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="../tampil/Home.php">
                <i class="fa fa-home"></i>
                <p>HOME</p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="../warga/profile.php">
                <i class="material-icons">person</i>
                <p>Profile</p>
            </a>
        </li>
        <li class="nav-item ">
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
    <form action="#" method="POST" name="ubah-password" enctype="multipart/form-data">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr height="56" align="center">
                <td>
                    <font size="2" color="FFFFFF"><b>UBAH PASSWORD</b></font>
                </td>
            </tr>
        </table>
        <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
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
            <tr height="56">
                <td> </td>
                <td><input type="submit" name="Ganti" value="Ganti"></td>
            </tr>
        </table>
    </form>
    </div>
</div>

<form action="#" method="POST" name="ubah-password" enctype="multipart/form-data">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="56" align="center">
            <td>
                <font size="2" color="FFFFFF"><b>UBAH PASSWORD</b></font>
            </td>
        </tr>
    </table>
    <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="36">
            <td>Password Lama</td>
            <td><input type="password" name="password_lama" id="password_lama" size="30" maxlength="20"></td>
        </tr>
        <tr height="36">
            <td>Password Baru</td>
            <td><input type="password" name="password_baru" id="password_baru" size="30" maxlength="20"></td>
        </tr>
        <tr height="36">
            <td>Konfirm Password Baru</td>
            <td><input type="password" name="konf_password" id="konf_password" size="30" maxlength="20"></td>
        </tr>
        <tr height="56">
            <td> </td>
            <td><input type="submit" name="Ganti" value="Ganti"></td>
        </tr>
    </table>
</form>

<?php
include '../tampil/footer.php';
?>