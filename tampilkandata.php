<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>List Mahasiswa</h2>
    <!-- form di table utk menampilkan data  -->
    <table border="1">
      <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>JURUSAN</th>
      </tr>
      <?php
        include 'koneksi.php'; //mengambil data dari koneksi.php
        $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa"); //deklarasi variabel query
        $no=1;
        // program utk menampilkan data yang didapat sebagai tabel
        foreach ($mahasiswa as $row) {
          $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki Laki';
          echo "<tr>
          <td>$no</td>
          <td>".$row['nim']."</td>
          <td>".$row['nama']."</td>
          <td>".$jenis_kelamin."</td>
          <td>".$row['jurusan']."</td>
          </tr>";
          $no++;
        }
       ?>
    </table>
  </body>
</html>
