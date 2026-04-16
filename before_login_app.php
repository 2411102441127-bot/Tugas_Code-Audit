<?php

function l($u, $p){
    if($u == "Puspita Ikasari" && $p == "13456"){
        echo "<!DOCTYPE html>
        <html>
        <head><title>Hasil</title></head>
        <body style='text-align:center; margin-top:100px;'>
            <h1 style='color:green;'>Login Berhasil</h1>
            <a href='index.html'>Kembali</a>
        </body>
        </html>";
    }else{
        echo "<!DOCTYPE html>
        <html>
        <head><title>Hasil</title></head>
        <body style='text-align:center; margin-top:100px;'>
            <h1 style='color:red;'>Login Gagal</h1>
            <a href='index.html'>Kembali</a>
        </body>
        </html>";
    }
}

$u = $_POST['username'];
$p = $_POST['password'];

l($u, $p);

?>
