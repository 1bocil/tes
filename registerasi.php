<?php
require 'functions.php';

if (isset($_POST["registerasi"]) ) {

    if (registerasi ($_POST) > 0 ) {
        echo "<script>
                alert ('user baru berhasil di tambahkan!');
                </script>";

    } else {
        echo mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
<h1>Halaman Registrasi</h1>

<form action="" method="post">

<ul>
    <li>
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
    </li>
    <li>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
    </li>
    
    <li>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </li>
    
    <li>
        <label for="password2">konfirmasi password</label>
        <input type="password" name="password2" id="password2">
    </li>
    
    <li>
        <button type="submit" name="registerasi">Register</button>
    </li>


</ul>
</form>

</body>
</html>