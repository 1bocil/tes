<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>

<body>
    <h2>DATA USER</h2>
    <br />
    <br />
    <br />
    <a href="index.php"> Menu</a>
    <br />
    <table border="1" cellpadding="10">
    <tr>
      <th>No</th>
      <th>ID</th>
      <th>Username</th>
      <th>Password</th>
    </tr>
        <?php
        include 'konek.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_user");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                </td>
                <td>
                    <a href="hapususer.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>