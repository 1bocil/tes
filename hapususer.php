<?php
if (isset($_GET['id'])) {
    include('konek.php');
    $id = $_GET['id'];
    $deli = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id='$id'");
    if ($deli) {
        echo 'User berhasil dihapus! ';
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo 'Gagal menghapus data! ';
        echo '<a href="index.php">Kembali</a>';
    }
}
