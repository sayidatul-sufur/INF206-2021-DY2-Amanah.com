<?php
include '../tampil/header.php';

$data = query("SELECT * FROM barang");

if (isset($_POST['cari'])) {
    $data = caribarang($_POST["keyword"]);
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Daftar Barang</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th class="text-center" scope="col">Jumlah Barang</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['Nama_Barang']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <p class="text-right">
                        <a href="form.php?id=<?php echo $d['id']; ?>">
                            <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Sumbangkan</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>