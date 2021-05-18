<?php
require 'function.php';
include '../tampil/headerAdmin.php';

// $id = $_GET['id'];
$data = query("SELECT * FROM barang");
// $data = query("SELECT * FROM barang WHERE id = '$id'");

if (isset($_POST['cari'])) {
  $data = caribarang($_POST["keyword"]);
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
          <table class="table table-striped table-hover">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Barang</th>
              <th class="text-center" scope="col">Jumlah Barang</th>
              <th scope="col">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($data as $d) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Nama_Barang']; ?></td>
                <td class="text-center"><?php echo $d['Jumlah']; ?></td>
                <td>
                  <a href="editBarang.php?id_Barang=<?php echo $d['id_Barang']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                  </a>
                  <button class="btn">
                    <a href="hapusBarang.php?id_Barang=<?php echo $d['id_Barang']; ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                      </svg>
                    </a>
                    Hapus
                  </button>
                </td>
              </tr>
            <?php
            }
            ?>
          </table>
          <p class="text-right">
            <a href="tambahBarang.php?id=<?php echo $d['id']; ?>">
              <button type="button" class="btn float-end" style="background-color: rgb(141, 76, 206);">Tambah Data</button>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../tampil/footer.php'; ?>