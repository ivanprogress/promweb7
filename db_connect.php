<?php
//deklarasi variabel konfigurasi database
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "database_user";
	var $koneksi;

//deklarasi function untuk koneksi database
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

//deklarasi function untuk register user
	function register($username,$password,$nama)
	{
		$insert = mysqli_query($this->koneksi,"insert into tb_user values ('','$username','$password','$nama')");
		return $insert;
	}
//deklarasi function untuk login user
	function login($username,$password)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{

			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
}
?>
