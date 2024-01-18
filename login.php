<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;

}


require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query ($conn, "SELECT * FROM tb_user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) == 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }  
    }

    $error = true;
}


?>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
            body{
                font-family: arial;
                font-size: 14px;
                background-color: #222;
            }

            #utama{
                width: 300px;
                margin: 0 auto;
                margin-top: 12%;
            }

            #judul{
                padding: 15px;
                text-align: center;
                color: #fff;
                font-size: 20px;
                background-color: #339966;
                border-top-right-radius: 10px;
                border-top-left-radius: 10px;
                border-bottom: 3px solid #336666;
            }

            #inputan{
                background-color: #ccc;
                padding: 20px;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
            }
            input{
                padding: 10px;
                border: 0;
            }
            .lg{
                width: 240px;
            }
            .btn{
                background-color: #339966;
                border-radius: 10px;
                color: #fff;
            }
            .btn:hover{
                background-color: #336666;
                cursor: pointer;
            }


            </style>
        </head>

        <body>
        <a href="index.php"></a>
         <?php if( isset($error) ) : ?>
            <p style="color: red; font-style: italic;">Username / Password salah </p>
            <?php endif; ?>

            <div id="utama">
                <div id="judul">
                    Login
                </div>

                <div id="inputan">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="username" id="username" placeholder="Username" class="lg"/>
                        </div>
                        <div style="margin-top:10px;">
                            <input type="password" name="password" id="password" placeholder="Password" class="lg"/>
                        </div>
                        <div style="margin-top:10px;">
                            <input type="submit" name="login" value="Login" class="btn"/>
                            <a style="margin-left:80px;" href="registerasi.php">Registrasi </a> 
                        </div>
                </div>
            </div>
        </body>

<form action="" method="post">
</form>
    
</body>
</html>