<?php
require '../tampil/function.php';
// include '../tampil/koneksi.php';
include '../tampil/headerAdmin.php';

$id = $_GET['id'];
if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "
        <script>
          // alert('data berhasil ditambahkan');
          document.location.href = 'daftarbarang.php?id=$id';
        </script>
      ";
  } else {
    echo "F
        <script>
          // alert('data gagal ditambahkan');
          document.location.href = 'daftarbarang.php?id=$id';
        </script>
      ";
  }
}
?>

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Tambah Barang</h4>
      </div>
      <div class="card-body">
        <div id="typography">
          <form method="post" action="">
            <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
              <tr>
                <td><b>Nama Barang</b></td>
                <td><input type="text" name="Nama_Barang" class="form-control text-center" style="color: white;"></td>
              </tr>
              <tr>
                <td><b>Jumlah</b></td>
                <td><input type="number" name="Jumlah" class="form-control text-center" style="color: white;"></td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit" name="submit" class="btn float-end mt-2" style="background-color: rgb(141, 76, 206);">Simpan</td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../tampil/footer.php'; ?>