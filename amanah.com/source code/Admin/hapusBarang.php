<?php
require '../tampil/function.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$no = $_GET['id_Barang'];
if (hapus($no) > 0) {
  echo "
        <script>
          // alert('data berhasil dihapus');
          document.location.href = 'daftarbarang.php?id=$id';
        </script>
    ";
} else {
  echo "
        <script>
        //   alert('data gagal dihapus');
          document.location.href = 'daftarbarang.php?id=$id';
        </script>
    ";
}
