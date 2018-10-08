<?php include_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
		$query ="SELECT `id`, `nim`, `nama`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat` FROM `mahasiswa` WHERE 1";
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
		?>
		<table>
			<thead>
				<th>NIM</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jenis Kelamin</th>
				<th>Hobi</th>
				<th>Fakultas</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</thead>
			<tbody>
			<?php 
			while ($data =mysqli_fetch_array($result)){
			 ?>
			 	<tr>
			 		<td><?php echo $data['nim']; ?></td>
			 		<td><?php echo $data['nama']; ?></td>
			 		<td><?php echo $data['kelas']; ?></td>
			 		<td><?php echo $data['jenis_kelamin']; ?></td>
			 		<td><?php echo $data['hobi']; ?></td>
			 		<td><?php echo $data['fakultas']; ?></td>
			 		<td><?php echo $data['alamat']; ?></td>
			 		<td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
			 	</tr>
			 	<?php
		 		}
	 		?>
			 </tbody>
		</table>
		<?php 
	 	}else{
	 		echo "Tidak Ada Data!";
	 	}
		?>
		<br>
		<a href="form.php">Tambah Data</a>
	</body>
</html>