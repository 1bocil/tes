<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require 'functions.php';

?>

<!DOCTYPE html>

<head>
    <title>Menu Utama Hilmi</title>
</head>

<style type="text/css">
        body{
            font-family:arial;
            font-size: 14px;
        }
        
        #canvas{
            width: 960px;
            margin: 0 auto;
            border: 1px solid silver;

        }

        #header{
            font-size: 20px;
            padding: 20px;
        }

        #menu{
            background-color: #0066ff;
        }
        #menu ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #menu ul li.utama{
            display: inline-table;
        }
        #menu ul li:hover{
            background-color: #0033cc;
        }
        #menu ul li a{
            display: block;
            text-decoration: none;
            line-height:40px;
            padding: 0 10px;
            color: #fff;
        }
        .utama ul{
            display: none;
            position: absolute;
            z-index: 2;
        }
        .utama:hover ul{
            display: block;
        }
        .utama ul li{
            display: block;
            background-color: #6cf;
            width: 140px;
        }


        #isi{
            min-height: 400px;
            padding: 20px;

        }

        #footer{
            text-align: center;
            padding: 20px;
            background-color: #ccc;
        }

</style>

<body>
    <div id="canvas">
        <div id="header">
            Menu utama
    </div>

    <div id="menu">
        <ul>
            <li class="utama"><a href="">Beranda</a></li>
            <li class="utama"><a href="list_mahasiswa.php">Data Mahasiswa</a></li>
            <li class="utama"><a href="list_barang.php">Data Barang</a></li>
            <li class="utama"><a href="list_user.php">Data User</a></li>
            <li class="utama"><a href="data_baru.php">Data Baru</a></li>
            <li class="utama"><a href="logout.php">Logout</a></li>
    </ul>
    </div>

    <div id="isi">
        Masih Kosong Belom Ada ide
    </div>

    <div id="footer">
        Terima Kasih Sudah Berkunjung di WEB Hilmi Zainal Arifin
    </div>
    </div>



</body>

</html>