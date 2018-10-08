<?php 
session_start();
include_once 'koneksi.php';
if (isset($_POST['submit'])) {
	$nama 					= isset($_POST['nama']) ? $_POST['nama'] : "";
	$username 				= isset($_POST['username']) ? $_POST['username'] : "";
	$password 				= isset($_POST['password']) ? md5($_POST['password']) : "";
	$konfirmasi_password 	= isset($_POST['konfirmasi_password']) ? md5($_POST['konfirmasi_password']) : "";

	if($password == $konfirmasi_password){
		$query = "INSERT INTO `user`(`username`, `password`, `nama`) VALUES ('$username','$password','$nama')";
		$query_success = mysqli_query($conn, $query);
		if ($query_success) {
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $nama;
			header('location: login.php');
		}
	} else {
		$_SESSION['pesan_error_registrasi'] = "Konfirmasi Password Salah!";
		header('location: registrasi.php');
	}
}
?>