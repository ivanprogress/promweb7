<?php
session_start(); //memulai session
include_once('db_connect.php'); //mengambil data dari db_connect.php
$database = new database();
//mengecek info login
if(isset($_SESSION['is_login']))
{
    header('location:tampilkontak.php');
}
//mengecek info login
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($database->login($username,$password))
    {
      header('location:tampilkontak.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
  </head>
  <body>
    <!-- form utk login  -->
    <form method="post" action="">
      <h1>Please sign in</h1>
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Username" name="username" required autofocus><br>
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Password" name="password" required><br>
      <button type="submit" name="login">Sign in</button>
      <!-- link register  -->
      <a href="register.php">Register</a>
</form>
</body>
</html>
