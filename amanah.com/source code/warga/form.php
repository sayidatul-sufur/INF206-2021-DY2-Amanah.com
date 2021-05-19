<?php
include '../tampil/header.php';
$id = $_GET['id'];
?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div id="typography">
                    <form method="post" action="Sumbangkan.php">
                        <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                            <tr>
                                <td><b>Nama</b></td>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <td><input type="text" name="nama" value="" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td><input type="text" name="Alamat" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><b>Nomor Hp</b></td>
                                <td><input type="text" name="nohp" class="form-control text-center" style="color: white;"></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                        </table>
                        <p class="text-right">
                            <button type="submit" class="btn float-end" style="background-color: rgb(141, 76, 206);">Berikutnya</button>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../tampil/footer.php'; ?>