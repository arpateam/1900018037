<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>

<style type="text/css">
	input[type="text"], input[type="email"], input[type="password"], select{
		height: 30px;
		width: 400px;
	}

	textarea{
		width: 400px;
	}

	input[type="radio"]{
		width: 30px;
		height: 20px;
	}

	input[type="submit"], input[type="reset"]{
		height: 40px;
		width: 200px;
		background-color: #28a745;
	}

	input[type="submit"]:hover, input[type="reset"]:hover{
		background-color: #218838;
	}
</style>

<body>

<center>
	
	<h1>FORMULIR PENDAFTARAN MAHASISWA BARU</h1>

	<hr />
	<form method="POST" action="table.php">
		<!-- data akan di proses & di validasi pada table.php -->
			
		<span align="left"><b>Nama Lengkap</b> :</span>
		<br />
		<input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" name="kirim" minlength="5" required>
			
		<br /><br />
		<span align="left"><b>Alamat Rumah</b> :</span>
		<br />
		<textarea name="alamat_rumah" cols="31" rows="8" minlength="15" required></textarea>
			
		<br /><br />
		<span align="left"><b>Jenis Kelamin</b> :</span>
		<br />
		<input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki" checked>
		<label for="laki-laki">Laki-Laki</label>
		<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
		<label for="perempuan">Perempuan</label>
			
		<br /><br />
		<span align="left"><b>Agama</b> :</span>
		<br />
		<select name="agama" required>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Katolik">Katolik</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddha">Buddha</option>
			<option value="Kong Hu Cu">Kong Hu Cu</option>
			<option value="Ateis">Ateis</option>
		</select>
			
		<br /><br />
		<span align="left"><b>Alamat Email</b> :</span>
		<br />
		<input type="email" name="alamat_email" placeholder="Masukkan Alamat Email" required>

		<br /><br />
		<hr />
		<center>
			<h2>Informasi Login</h2>
		</center>
			
		<span align="left"><b>Username</b> :</span>
		<br />
		<input type="text" name="username" placeholder="Masukkan Username" minlength="8" required>
			
		<br /><br />
		<span align="left"><b>Password</b> :</span>
		<br />
		<input type="password" name="password" placeholder="Masukkan Password" minlength="8" required>
			
		<br /><br />
		<input type="submit" value="Kirim" name="kirim">
		<input type="reset" value="Batal" name="batal">
			
		<br /><br />
		<hr />

	</form>

</center>

</body>
</html>