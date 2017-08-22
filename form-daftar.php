<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="Css/daftar.css">
</head>

<body>

	<div class="wrapper">
		<form action="proses-pendaftaran.php" method="post"> 
		<table>
			<tr>
				<td colspan="3"><h3>Formulir Pendaftaran Siswa Baru</h3></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td><input type="text" name="nama" placeholder="Nama Lengkap" class="text"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" placeholder="Alamat Rumah" class="text"></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td> : </td>
				<td><input type="text" name="sekolah_asal" placeholder="Asal sekolah" class="text"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Perempuan
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td> : </td>
				<td>
					<select name="agama">
						<option>Islam</option>
						<option>Hindu</option>
						<option>Kristen</option>
						<option>Katolik</option>
						<option>Budha</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button type="submit" value="daftar" name="daftar">Kirim</button></td>
			</tr>
		</table>
	</form>
	</div>

	</body>
</html>
