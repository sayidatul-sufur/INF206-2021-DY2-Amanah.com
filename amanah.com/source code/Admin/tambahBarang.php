<?php
require 'function.php';
// include '../tampil/koneksi.php';
include '../tampil/header.php';

// $id = $_GET['id'];
if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "
        <script>
          alert('data berhasil ditambahkan');
          document.location.href = 'daftarbarang.php';
        </script>
      ";
  } else {
    echo "F
        <script>
          alert('data gagal ditambahkan');
          document.location.href = 'daftarbarang.php';
        </script>
      ";
  }
}
?>

<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Nama Acara</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p> -->
      </div>
      <div class="card-body">
        <div id="typography">
          <div class="card-title">
            <h2>Daftar Barang</h2>
          </div>
          <form method="post" action="">
            <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
              <!-- <tr>			
                  <td><b>Id Acara</b></td>
                  <td><input type="text" name="id" value="<?php echo $id; ?>" class="form-control text-center" style="color: white;" disabled></td>
                </tr> -->
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
