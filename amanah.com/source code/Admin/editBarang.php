<?php
require '../tampil/function.php';
include '../tampil/headerAdmin.php';

$id = $_GET['id'];
$no = $_GET['id_Barang'];
$data = query("SELECT * from barang where id_Barang='$no'");

if (isset($_POST["submit"])) {
  if (update($_POST) > 0) {
    echo "
      <script>
        // alert('data berhasil diubah');
        document.location.href = 'daftarbarang.php?id=$id';
      </script>
    ";
  } else {
    echo "
      <script>
        // alert('data gagal diubah');
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
        <h4 class="card-title">Nama Acara</h4>
        <!-- <p class="card-category">Created using Roboto Font Family</p> -->
      </div>
      <div class="card-body">
        <div id="typography">
          <div class="card-title">
            <h2>Daftar Barang</h2>
          </div>
          <?php
          foreach ($data as $d) {
          ?>
            <form method="post" action="">
              <table type="table table-borderless" class="card bg-primary col-md-4 mx-auto d-block">
                <tr>
                  <td><b>Nama Barang</b></td>
                  <td>
                    <input type="hidden" name="id_Barang" value="<?php echo $d['id_Barang']; ?>">
                    <input type="text" name="Nama_Barang" class="form-control text-center" style="color: white;" value="<?php echo $d['Nama_Barang']; ?>">
                  </td>
                </tr>
                <tr>
                  <td><b>Jumlah</b></td>
                  <td><input type="number" name="Jumlah" class="form-control text-center" style="color: white;" value="<?php echo $d['Jumlah']; ?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><button class="btn" type="submit" name="submit" style="background-color: rgb(141, 76, 206);" data-toggle="modal" data-target="#myModal">SIMPAN</button></td>
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
<?php include '../tampil/footer.php' ?>
</div>
</div>
</body>

</html>