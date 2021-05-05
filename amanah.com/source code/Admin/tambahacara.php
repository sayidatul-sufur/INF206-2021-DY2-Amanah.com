<?php include '../tampil/headerAdmin.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Tambah Acara</h4>
            </div>
            <div class="card-body">
                <div id="typography">
                    <div class="card-title">
                    </div>
                    <form method="post" action="tambahacara_aksi.php">
                        <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                            <tr>
                                <td><b>Nama acara</b></td>
                                <td><input type="text" name="Nama_acara" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Acara</b></td>
                                <td><input type="date" name="tanggal_acara" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button value="SIMPAN" class="btn float-end mt-2" style="background-color: rgb(141, 76, 206);">Simpan</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../tampil/footer.php' ?>