<?php
//mengecek info login
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
//mengambil data dari koneksi.php
include 'koneksi.php';

//menyimpan data dalam varaibel
$nama = $_POST['nama'];
$jkel = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];


//query SQL utk insert into
$query = "INSERT INTO kontak SET nama='$nama', jkel='$jkel',  email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman tampilkontak.php
header("location:tampilkontak.php");
 ?>
