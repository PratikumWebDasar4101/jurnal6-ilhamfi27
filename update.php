<?php 
include_once 'koneksi.php';
if(isset($_POST['submit'])){
	$nim = isset($_POST['nim']) ? $_POST['nim'] : "";
	$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
	$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : "";
	$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
	$hobby = isset($_POST['hobby']) ? $_POST['hobby'] : "";
	$fakultas = isset($_POST['fakultas']) ? $_POST['fakultas'] : "";
	$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";

	$query = "UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`kelas`='$kelas',`jenis_kelamin`='$jenis_kelamin',`hobi`='$hobby',`fakultas`='$fakultas',`alamat`='$alamat' WHERE id='$id'";
	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header("location: list.php");
	}else{
		echo mysql_error($conn);
		echo "<a href='edit.php'>Kembali</a>";
	}
}
?>