<?php
//Koneksi ke Database Mahasiswa
$server = "localhost";
    $user = "root";
$pass = "";
$dbname = "info_data";

$koneksi = mysqli_connect ($server,$user,$pass,$dbname);
if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal".mysqli_connect_error();
}
?>