<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>DATA MAHASISWA</h2>
    <br />
    <a href="tambahmhs.php"> + Tambah Mahasiswa</a>
    <br />
    <br />
    <a href="index.php"> Menu</a>
    <br />
    <table border="1" cellpadding="10">
    <tr>
      <th>No</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Jurusan</th>
      <th>Kelas</th>
      <th>Gambar</th>
    </tr>
        <?php
        include 'koneksim.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_mahasiswaa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['npm']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><img src="<?php echo "file/" . $d['gambar']; ?>" width="50" height="70">
                </td>
                <td>
                    <a href="edit_mahasiswa.php?id=<?php echo $d['npm']; ?>">EDIT</a> |
                    <a href="hapusm.php?id=<?php echo $d['npm']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>