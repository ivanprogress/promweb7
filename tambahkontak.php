<?php
session_start(); //memulai session
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
    <!-- form utk submit data kontak  -->
    <form action="simpankontak.php" method="post">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td>NAMA</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>JENIS KELAMIN</td>
          <td>
            <input type="radio" name="jenis_kelamin" value="L"> Laki Laki
            <input type="radio" name="jenis_kelamin" value="p"> Perempuan
          </td>
        </tr>
        <tr>
          <td>EMAIL</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>ALAMAT</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td>KOTA</td>
          <td><input type="text" name="kota"></td>
        </tr>
        <tr>
          <td>PESAN</td>
          <td><input type="text" name="pesan"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="btnLogin" value="Kirim"> <!-- button submit kirim -->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
