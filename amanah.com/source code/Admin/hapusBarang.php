<?php
require '../tampil/function.php';

// menangkap data id yang di kirim dari url
$no = $_GET['id_Barang'];
if (hapus($no) > 0) {
    echo "
        <script>
        //   alert('data berhasil dihapus');
          document.location.href = 'daftarbarang.php';
        </script>
    ";
} else {
    echo "
        <script>
        //   alert('data gagal dihapus');
          document.location.href = 'daftarbarang.php';
        </script>
    ";
}
