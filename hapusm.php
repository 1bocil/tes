<?php
if (isset($_GET['npm'])) {
    include('koneksim.php');
    $kode_barang = $_GET['npm'];
    $del = mysqli_query($koneksi, "DELETE FROM tb_mahasiswaa WHERE npm='$npm'");
    if ($del) {
        echo 'Data barang berhasil dihapus! ';
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo 'Gagal menghapus data! ';
        echo '<a href="index.php">Kembali</a>';
    }
}
