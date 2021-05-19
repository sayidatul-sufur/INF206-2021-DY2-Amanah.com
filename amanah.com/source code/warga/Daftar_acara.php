<?php
include '../tampil/header.php';

$data = query("SELECT * FROM daftar_acara");

if (isset($_POST['cari'])) {
    $data = cari($_POST["keyword"]);
}
?>

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