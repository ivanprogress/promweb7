<?php
//deklarasi variabel konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan2";

//deklarasi varibel untuk koneksi database
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

//cek Koneksi
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}
 ?>
