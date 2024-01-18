<?php
// koneksi database
include 'koneksim.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // menangkap data yang di kirim dari form
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $namaFileBaru = "";


    if ($_FILES['gambar']['name']) {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $photo = $_FILES['gambar']['name'];
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $filetmp = $_FILES['gambar']['tmp_name'];
        $namaileBaru = 'img_' . $npm . '.'  . $ekstensi;

        if (!in_array($ekstensi, $ekstensi_diperbolehkan)) {
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window location='edit_mahasiswa.php?id=$npm';</script>";
            return;
        }

        if ($ukuran > 1044070) {
            echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahmhs.php';</script>";
            return;
        }

        if (!move_uploaded_file($filetmp, 'file/' . $namaileBaru)) {
            echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
            return;
        }
    }


    $query = "UPDATE tb_mahasiswaa SET nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', kelas='$kelas'";

    if ($namaileBaru != "") $query .= ",gambar='$namaileBaru'";
    $query .= "WHERE npm='$npm'";

    $update = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($update) {
        echo "<script>alert('DATA BERHASIL DI UPDATE');window.location='index.php';</script>";
    } else {
        echo "<script>alert('DATA GAGAL DI UPDATE');window.location='index.php';</script>";
    }
}
