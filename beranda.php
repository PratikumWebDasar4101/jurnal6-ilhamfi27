<?php 
include_once 'koneksi.php';
session_start();
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Beranda</title>
	</head>
	<body>
		<a href="logout.php">Logout</a><br>
		<h1>Hai <?php echo $nama; ?>!</h1>
		<table>
			<form action="input_data.php" method="POST"">
			<table>
				<tr>
					<td valign="top">NIM</td>
					<td><input type="text" name="nim" required></td>
				</tr>
				<tr>
					<td valign="top">Nama</td>
					<td><input type="text" name="nama" required></td>
				</tr>
				<tr>
					<td valign="top">Kelas</td>
					<td>
						<input type="radio" name="kelas" value="D3MI4101"> D3MI4101<br>
						<input type="radio" name="kelas" value="D3MI4102"> D3MI4102<br>
						<input type="radio" name="kelas" value="D3MI4103"> D3MI4103<br>
						<input type="radio" name="kelas" value="D3MI4104"> D3MI4104
					</td>
				</tr>
				<tr>
					<td valign="top">Jenis Kelamin</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="L"> Laki-Laki<br>
						<input type="radio" name="jenis_kelamin" value="P"> Perempuan
					</td>
				</tr>
				<tr>
					<td valign="top">Hobi</td>
					<td>
						<input type="checkbox" name="hobby[]" value="Membaca">Membaca<br>
						<input type="checkbox" name="hobby[]" value="Menulis">Menulis<br>
						<input type="checkbox" name="hobby[]" value="Memasak">Memasak<br>
						<input type="checkbox" name="hobby[]" value="Mereparasi Barang">Mereparasi Barang<br>
						<input type="checkbox" name="hobby[]" value="Bersepeda">Bersepeda<br>
						<input type="checkbox" name="hobby[]" value="Memancing">Memancing<br>
						<input type="checkbox" name="hobby[]" value="Balapan">Balapan<br>
						<input type="checkbox" name="hobby[]" value="Berenang">Berenang<br>
						<input type="checkbox" name="hobby[]" value="Badminton">Badminton<br>
						<input type="checkbox" name="hobby[]" value="Futsal">Futsal<br>
						<input type="checkbox" name="hobby[]" value="Basket">Basket<br>
					</td>
				</tr>
				<tr>
					<td valign="top">Fakultas</td>
					<td>
						<select name="fakultas">
							<option value="">-- Fakultas --</option>
							<option value="FIT">FIT</option>
							<option value="FKB">FKB</option>
							<option value="FEB">FEB</option>
							<option value="FIK">FIK</option>
							<option value="FTE">FTE</option>
							<option value="FRI">FRI</option>
							<option value="FIF">FIF</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">Alamat</td>
					<td>
						<textarea name="alamat"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
		</table>
	</body>
</html>