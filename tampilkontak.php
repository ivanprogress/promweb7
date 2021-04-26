<?php
session_start();  //memulai session
//mengecek info login
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>List Kontak</h2>
    <a href="tambahkontak.php" >Tambah Kontak</a>
    <a href="logout.php" >Logout</a>
    <!-- form di table utk menampilkan data kontak -->
    <table border="1">
      <tr>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>KOTA</th>
        <th>PESAN</th>
      </tr>
      <?php
        include 'koneksi.php'; //mengambil data dari koneksi.php
        $kontak = mysqli_query($koneksi, "SELECT * FROM kontak"); //deklarasi variabel query
        $no=1;
        // program utk menampilkan data yang didapat sebagai tabel
        foreach ($kontak as $row) {
          $jenis_kelamin = $row['jkel']=='P'?'Perempuan':'Laki Laki';
          echo "<tr>
          <td>$no</td>
          <td>".$row['Nama']."</td>
          <td>".$jenis_kelamin."</td>
          <td>".$row['Email']."</td>
          <td>".$row['Alamat']."</td>
          <td>".$row['Kota']."</td>
          <td>".$row['Pesan']."</td>
          </tr>";
          $no++;
        }
       ?>
    </table>
  </body>
</html>
