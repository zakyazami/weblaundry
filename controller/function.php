<?php
$servername = "localhost";
$database = "app_laundry";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername ,$username, $password, $database);

if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
else{
    echo "Koneksi Berhasil";
}
?>