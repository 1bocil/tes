<!DOCTYPE html>
<html>

<head>
    <title>DATA MAHASISWA</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <br />
    <a href="list_mahasiswa.php">KEMBALI</a>
    <br />
    <br />
    <h3>Edit Data Mahasiswa</h3>
    <?php
    include 'koneksim.php';
    $npm = $_GET['npm'];
    $data = mysqli_query($koneksi, "select * from tb_mahasiswaa where npm='$npm'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="prosesupdatem.php" enctype="multipart/form-data">
            <table>
            tr>
                <td>NPM</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <Select name=jenis_kelamin>
                        <option value=l Informasi>Laki Laki</option>
                        <option value=P Informatika>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <Select name=jurusan>
                        <option value=si Informasi>Sistem Informasi</option>
                        <option value=ti Informatika>Teknologi Informasi</option>
                        <option value=Mjn Informatika>Manajeman</option>
                        <option value=rpl Informatika>RPL</option>
                        <option value=ak Informatika>Akutansi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
    </tr>

                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar"> <img src="file/<?php echo $d['gambar']; ?>" style="width: 100px float: left;margin-bottom: 5px;"><br /><i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah photo</i>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <br /><br />
                        <input name="save" type="submit" value="Save">
                        <input name="BtnBatal" type="reset" value="Batal" />
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>