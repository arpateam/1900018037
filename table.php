<!DOCTYPE html>
<html>
<head>

	<title>TABEL DATA PENDAFTARAN MAHASISWA BARU</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="container">

		<header>
			<h1 class="text-success">TABEL DATA PENDAFTARAN MAHASISWA BARU</h1>
		</header>

		<table class="table table-striped">

		    <thead>
		      	<tr>
		        	<th>No</th>
					<th>Nama</th>
					<th>Alamat Rumah</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Alamat Email</th>
					<th>Username</th>
					<th>Password</th>
		      </tr>
		    </thead>



		    <!-- proses input dan validasi dari data yang sebelumya sudah di inputkan melalui halaman form.php -->

			<?php

				if (isset($_POST['kirim'])) {

					// jika username pada form.php sudah di isi, maka jalankan program di bawah ini
					$nama_lengkap		= $_POST['nama_lengkap']; // nama_lengkap didapatkan di name form pada halaman sebelumnya
					$alamat_rumah		= $_POST['alamat_rumah']; // alamat_rumah didapatkan di name form pada halaman sebelumnya
					$jenis_kelamin		= $_POST['jenis_kelamin']; // jenis_kelamin didapatkan di name form pada halaman sebelumnya
					$agama 				= $_POST['agama']; // agama didapatkan di name form pada halaman sebelumnya
					$alamat_email 		= $_POST['alamat_email']; // email didapatkan di name form pada halaman sebelumnya
					$username 			= $_POST['username']; // username didapatkan di name form pada halaman sebelumnya
					$password 			= $_POST['password']; // password didapatkan di name form pada halaman 
					$konfirmasi_password= $_POST['konfirmasi_password']; // konfirmasi_password didapatkan di name form pada halaman 

					// buka file dataMahasiswa.txt
					$filedataMahasiswa	= "dataMahasiswa.txt";

					// buka file dataMahasiswa.txt mode tulis
					$fl 	= fopen($filedataMahasiswa, "a+");

					// simpan
					fwrite($fl,$nama_lengkap.' | '.$alamat_rumah.' | '.$jenis_kelamin.' | '.$agama.' | '.$alamat_email.' | '.$username.' | '.$password.' | ');

					// tutup
					fclose($fl);

					echo "<script type='text/javascript'>alert('Terimakasih sudah melakukan pendaftaran sebagai mahasiswa baru. Data anda berhasil di input');</script>";

				}

			?>

			<!-- proses input dan validasi dari data yang sebelumya sudah di inputkan melalui halaman form.php -->

		    <tbody>

		    	<?php

					// buka file dataMahasiswa.txt
					$filedataMahasiswanya	= "dataMahasiswa.txt";
					$OpendataMahasiswanya 	= fopen($filedataMahasiswanya, "r");

					$nomorUrut				= 1;
					$i 						= 0;

					$isidataMahasiswanya 	= fgets($OpendataMahasiswanya);

					if (empty($isidataMahasiswanya)) {
						echo "<tr>";
						echo "<td colspan='8'> <b>DATA PENDAFTARAN MAHASISWA BARU MASIH KOSONG</b> </td>";
						echo "<br />";
						echo "</tr>";
					}
											
					$pisahKarakter			= explode("|", $isidataMahasiswanya);

					$mencariJmlKarakter		= substr_count($isidataMahasiswanya, "|");


					while ( $i < $mencariJmlKarakter) {

						echo "<tr>";
						echo "<td>".$nomorUrut++."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<td>".$pisahKarakter[$i++]."</td>";
						echo "<br />";
						echo "</tr>";

					}

					// tutup
					fclose($OpendataMahasiswanya);

				?>

		    </tbody>

  		</table>

  		<div class="col-md-12 text-center mt-4 mb-4">
			<a href="form.php" class="tutup btn btn-danger">ISI FORMULIR LAGI</a>
		</div>

	</div>

	<footer class="col-md-12 btn-success mt-4">
		<p>Copyright &copy; Aldi Febrianto | 1900018037</p>
	</footer>

</body>
</html>
