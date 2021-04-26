<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form di table utk submit data input  -->
    <form action="simpan.php" method="post">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td>NIM</td>
          <td><input type="text" onekeyup="isi_otomatis()" name="nim"></td>
        </tr>
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
          <td>JURUSAN</td>
          <td>
          <select name="jurusan">
            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
          </select>
          </td>
        </tr>
        <tr>
          <td>ALAMAT</td>
          <td><input type="text" name="alamat"></td>
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
