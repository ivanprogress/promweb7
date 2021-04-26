<?php
include 'koneksi.php'; //mengambil data dari koneksi.php

//menyimpan data dalam varaibel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//query SQL utk insert into
$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin',  jurusan='$jurusan', alamat='$alamat'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("location:tampilkandata.php");
 ?>
