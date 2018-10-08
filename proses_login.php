<?php 
session_start();
include_once 'koneksi.php';
if (isset($_POST['submit'])) {
	$username	= isset($_POST['username']) ? $_POST['username'] : "";
	$password	= isset($_POST['password']) ? md5($_POST['password']) : "";

	$query = "SELECT `username`, `nama` FROM `user` WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $query);
	$user_exist = mysqli_num_rows($result);

	if ($user_exist > 0) {
		while ($d = mysqli_fetch_array($result)) {
			$_SESSION['username'] = $d['username'];
			$_SESSION['nama'] = $d['nama'];
			header('location: beranda.php');
		}
	} else {
		$_SESSION['pesan_login_registrasi'] = "Username atau Password Salah atau Akun Belum Terdaftar";
		header('location: login.php');
	}
}
?>