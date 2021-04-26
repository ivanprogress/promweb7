<?php
//deklarasi variabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan2";

//deklarasi varibel untuk koneksi database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//cek Koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//buat tabel
$tabel = "CREATE TABLE KONTAK (
id INT(4) AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(30) NOT NULL,
jkel VARCHAR(10),
Email VARCHAR(40),
Alamat VARCHAR(50),
Kota VARCHAR(20),
Pesan TEXT
)";

//cek apakah program berhasil dijalankan
if (mysqli_query($conn, $tabel)) {
  echo "Table created successfully";
}
else {
  echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
