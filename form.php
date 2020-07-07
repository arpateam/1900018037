<!DOCTYPE html>
<html>
<head>
	
	<title>FORMULIR PENDAFTARAN MAHASISWA BARU</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<div class="container">

		<header>
			<h1 class="text-success">FORMULIR PENDAFTARAN MAHASISWA BARU</h1>
		</header>

		<div class="col-md-12 text-center mt-4 mb-4">
			<a href="table.php" class="tutup btn btn-danger">LIHAT DATA PENDAFTARAN MAHASISWA BARU</a>
		</div>

		<div class="form mt-4 mb-4">

			<div class="header-form col-md-12 btn-success text-center">
				<h3 class="text-white">
					ISI FORM DIBAWAH INI DENGAN BENAR
				</h3>
			</div>

			<form method="POST" action="table.php">

				<!-- data akan di proses & di validasi pada table.php -->
				<div class="input-group mt-2">	
					<label for="nama_lengkap" align="left"><b>Nama Lengkap</b> :</label>
					<input class="col-md-12 form-control" id="nama_lengkap" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" name="kirim" minlength="5" required>
				</div>
					
				<div class="input-group mt-4">
					<label for="alamat_rumah" align="left"><b>Alamat Rumah</b> :</label>
					<textarea class="col-md-12 form-control" id="alamat_rumah" name="alamat_rumah" cols="31" rows="8" minlength="15" required></textarea>
				</div>
					
				<div class="input-group mt-4">

					<label for="jenis_kelamin" align="left" class="col-md-12 mb-2"><b>Jenis Kelamin</b> :</label>

					<input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki" class="mr-2" checked>
					<label for="laki-laki" class="mr-2">Laki-Laki</label>

					<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="mr-2">
					<label for="perempuan" class="mr-2">Perempuan</label>

				</div>
					
				<div class="input-group mt-4">

					<label for="agama" align="left" class="col-md-12 mb-2"><b>Agama</b> :</label>
					<br />
					<select class="col-md-12 form-control" name="agama" id="agama" required>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Kong Hu Cu">Kong Hu Cu</option>
						<option value="Ateis">Ateis</option>
					</select>

				</div>
					
				<div class="input-group mt-4">

					<label for="alamat_email" align="left"><b>Alamat Email</b> :</label>
					<input class="col-md-12 form-control" id="alamat_email" type="email" name="alamat_email" placeholder="Masukkan Alamat Email" required>

				</div>

				<div class="informasi-login col-md-12 text-center">
					<h2 class="text-success">
						INFORMASI LOGIN
					</h2>
				</div>
					
				<div class="input-group mt-4">
					
					<label for="username" align="left"><b>Username</b> :</label>
					<br />
					<input class="col-md-12 form-control" id="username" type="text" name="username" placeholder="Masukkan Username" minlength="8" required>

				</div>
					
				<div class="input-group mt-4 mb-4">

					<label align="left"><b>Password</b> : <a class="text-success" onclick="myFunctionShowPassword()"><small><u>(Lihat Password)</u></small></a></label>
					<br /><br />
					<input class="col-md-12 form-control" type="password" name="password" id="password" placeholder="Masukkan Password" minlength="8" required>

					<script type="text/javascript">
						function myFunctionShowPassword() {
							var x = document.getElementById("password");
							if (x.type === "password") {
								x.type = "text";
							} else {
								x.type = "password";
							}
						}
					</script>

				</div>
					
				<div class="input-group mt-4 mb-4">

					<label align="left"><b>Konfirmasi Password</b> : <a class="text-success" onclick="myFunctionShowPasswordKonfirmasi()"><small><u>(Lihat Password)</u></small></a></label>
					<br /><br />
					<input class="col-md-12 form-control" type="password" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Password" minlength="8" required>

					<script type="text/javascript">
						function myFunctionShowPasswordKonfirmasi() {
							var x = document.getElementById("konfirmasi_password");
							if (x.type === "password") {
								x.type = "text";
							} else {
								x.type = "password";
							}
						}
					</script>

				</div>

				<script type="text/javascript">
					window.onload = function () {
					    document.getElementById("password").onchange = validatePassword;
					    document.getElementById("konfirmasi_password").onchange = validatePassword;
					}
					function validatePassword(){
					    var pass2=document.getElementById("konfirmasi_password").value;
					    var pass1=document.getElementById("password").value;
					    if(pass1!=pass2)
					        document.getElementById("konfirmasi_password").setCustomValidity("Password Tidak Sama, Coba Lagi");
					    else
					    	document.getElementById("konfirmasi_password").setCustomValidity('');
					}
				</script>

				<button class="col-md-12 form-control text-white btn-success mt-4" type="submit" value="Kirim" name="kirim">KIRIM</button>
				<button class="col-md-12 form-control text-white btn-danger mt-2" type="reset" value="Batal" name="batal">BATAL</button>

			</form>

		</div>

	</div>

	<footer class="col-md-12 btn-success mt-4">
		<p>Copyright &copy; Aldi Febrianto | 1900018037</p>
	</footer>

</body>
</html>
