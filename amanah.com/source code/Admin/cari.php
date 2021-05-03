//ini belum jalan

<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$no = $_GET['id_Barang'];

if (ISSET($_POST['submit'])){
    $cari = $_POST['Nama_Barang'];
    $query2 = "SELECT * FROM barang WHERE Nama_Barang LIKE '%$cari%'";
 
    $sql = mysqli_query($koneksi, $query2);
    while ($r = mysqli_fetch_array($sql)){
        ?>
        <tr>
        <td><?php echo $r['Nama_Barang']; ?></td>
        <td><?php echo $r['Jumlah']; ?></td>
        </tr>  
<?php }}
// mengalihkan halaman kembali ke index.php
header("location:daftarbarang.php");

?>