<!DOCTYPE html>
<html>

<head>
    <title>DATA BARANG</title>
</head>

<body>
    <h2>DATA BARANG</h2>
    <br />
    <a href="list_barang.php">Data Barang</a>
    <br />
    <br />
    <h3>Masukan informasi Barang Baru</h3>
    <form method="post" action="prosesgambar.php" enctype="multipart/form-data">
        <table width="400">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kdbarang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nmbarang"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <Select name=satuan>
                        <option value=PCS Informasi>Pcs</option>
                        <option value=PACK Informatika>Pack</option>
                        <option value=KG Informatika>Kg</option>
                        <option value=lusin Informatika>Lusin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Modal</td>
                <td><input type="text" name="hmodal"></td>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="hjual"></td>
            </tr>
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