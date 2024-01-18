<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>DATA MAHASISWA</h2>
    <br />
    <a href="list_mahasiswa.php">Data Mahasiswa</a>
    <br />
    <br />
    <h3>Masukan informasi Mahasiswa Baru</h3>
    <form method="post" action="prosesgambarm.php" enctype="multipart/form-data">
        <table width="400">
            <tr>
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
                <td><input type="file" name="gambar" id="gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name="save" type="submit" value="Save">
                    <input name="BtnBatal" type="reset" value="Batal" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>