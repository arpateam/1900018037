<!DOCTYPE html>
<html>
<head>
	<title>TABEL</title>
</head>
<body>

<center>

	<h1>BERIKUT DATA PENDAFTARAN MAHASISWA YANG TADI ANDA MASUKKAN</h1>
	<hr />

	<table width="70%" height="100%" border="1">
		<tr height="50">
			<th>No</th>
			<th>Nama</th>
			<th>Alamat Rumah</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Alamat Email</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

		<!-- proses input dan validasi dari data yang sebelumya sudah di inputkan melalui halaman form.php -->

		<?php

			if (!empty($_POST['username'])) {
				// jika username pada form.php sudah di isi, maka jalankan program di bawah ini
				echo "<script>alert('Data anda berhasil terkirim');</script>";
				$nama_lengkap	= $_POST['nama_lengkap']; // nama_lengkap didapatkan di name form pada halaman sebelumnya
				$alamat_rumah	= $_POST['alamat_rumah']; // alamat_rumah didapatkan di name form pada halaman sebelumnya
				$jenis_kelamin	= $_POST['jenis_kelamin']; // jenis_kelamin didapatkan di name form pada halaman sebelumnya
				$agama 			= $_POST['agama']; // agama didapatkan di name form pada halaman sebelumnya
				$alamat_email 	= $_POST['alamat_email']; // email didapatkan di name form pada halaman sebelumnya
				$username 		= $_POST['username']; // username didapatkan di name form pada halaman sebelumnya
				$password 		= $_POST['password']; // password didapatkan di name form pada halaman sebelumnya
			}elseif (empty($_POST['username'])) {
				// jika username pada form.php belum di isi, maka tidak bisa untuk mngakses halaman table.php ini & auto redirect ke halaman form.php
				echo "<script>alert('Mohon isi data terlebih dahulu pada form.php'); window.location = 'form.php';</script>";
				exit();
			}

		?>

		<!-- proses input dan validasi dari data yang sebelumya sudah di inputkan melalui halaman form.php -->


		<tr height="100" style="text-align: center;font-size: 18px;">
			<td>1</td>
			<td><?php echo $nama_lengkap; ?></td>
			<td><?php echo $alamat_rumah; ?></td>
			<td><?php echo $jenis_kelamin; ?></td>
			<td><?php echo $agama; ?></td>
			<td><a href="mailto:<?php echo $alamat_email; ?>" target="_blank"><?php echo $alamat_email; ?></a></td>
			<td><?php echo $username; ?></td>
			<td><?php echo $password; ?></td>
		</tr>


	</table>

	<a href="form.php">
		<h1>Ulangi Lagi</h1>
	</a>

</center>

</body>
</html>