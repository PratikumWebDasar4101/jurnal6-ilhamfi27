<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Registrasi</title>
	</head>
	<body>
		<form action="proses_registrasi.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td valign="top">Nama</td>
					<td><input type="text" name="nama" pattern="[A-Za-z ]{3,35}" title="Harus Huruf, Lebih dari 3 Karakter dan Kurang dari Sama Dengan 35" required></td>
				</tr>
				<tr>
					<td valign="top">Username</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td valign="top">Password</td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td valign="top">Konfirmasi Password</td>
					<td><input type="password" name="konfirmasi_password" required></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>