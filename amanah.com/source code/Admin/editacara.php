<?php
include '../tampil/koneksi.php';
include '../tampil/headerAdmin.php';
?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Acara</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <div class="card-title">
                    </div>
                    <?php
                    $no = $_GET['id'];
                    $data = mysqli_query($koneksi, "select * from daftar_acara where id='$no'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" action="updateacara.php">
                            <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                                <tr>
                                    <td><b>Nama Acara</b></td>
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                        <input type="text" name="Nama_acara" class="form-control text-center" style="color: white;" value="<?php echo $d['Nama_acara']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Acara</b></td>
                                    <td><input type="date" name="tanggal acara" class="form-control text-center" style="color: white;" value="<?php echo $d['tanggal_acara']; ?>"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="btn" type="submit" style="background-color: rgb(141, 76, 206);">SIMPAN</button></td>
                                </tr>
                            </table>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../tampil/footer.php'; ?>