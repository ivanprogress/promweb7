<?php
include_once('db_connect.php'); //mengambil data dari db_connect.php
//mengecek info register
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if($database->register($username,$password,$nama))
    {
      header('location:login.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<main>
  <!-- form utk login  -->
    <h1>Register Form</h1>
    <p>Silahkan Daftarkan Identitas Anda</p>
    <form method="post" action="">
      <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username"><br>
      <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Nama"><br>
      <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password"><br>
      <a href="login.php">Login</a>
      <button type="submit" name="register">Register</button>
</form>
</main>
</body>
</html>
