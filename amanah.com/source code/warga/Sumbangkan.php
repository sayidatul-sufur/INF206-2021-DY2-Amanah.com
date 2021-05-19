<?php
include '../tampil/header.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['Alamat'];
$nohp = $_POST['nohp'];

$data = query1("SELECT * FROM barang WHERE id = '$id'");

if (isset($_POST['cari'])) {
    $data = cari1($_POST["keyword"]);
}
// menginput data ke database
mysqli_query($koneksi, "insert into sumbangan (id,Nama,Alamat,no_hp) values('$id','$nama','$alamat','$nohp')");


?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Daftar Barang</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <form method="post" action="simpan.php">
                        <table class="table">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Sumbangan</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($data as $d) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $d['Nama_Barang']; ?></td>
                                    <td><?= $d['Jumlah']; ?></td>
                                    <input type="hidden" name="id" value="<?= $d['id']; ?>">
                                    <input type="hidden" name="nama" value="<?= $nama; ?>">
                                    <input type="hidden" name="id_Barang" value="<?= $d['id_Barang']; ?>">
                                    <input type="hidden" name="Jumlah" value="<?= $d['Jumlah']; ?>">
                                    <input type="hidden" name="Nama_barang" value="<?= $d['Nama_Barang']; ?>">
                                    <td><input type="number" name="daftar_sumbangan" class="form-control text-center" style="color: black; width: 25%" value="0" max="<?= $d['Jumlah']; ?>" min="0"></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>

                        <!-- <p class="text-right">
                            <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">Selsai</button>
                        </p> -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>