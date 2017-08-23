<?php
include('config.php');

if( !isset($_GET['id']) ){
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="Css/daftar.css">
</head>

<body>

	<div class="wrapper">
		<form action="proses-edit.php" method="post"> 
		<table>
			<tr>
				<td colspan="3"><h3>Formulir Pendaftaran Siswa Baru</h3></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td>
					<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
					<input type="text" name="nama" placeholder="Nama Lengkap" class="text" value="<?php echo $siswa['nama'] ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" placeholder="Alamat Rumah" class="text" value="<?php echo $siswa['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td> : </td>
				<td><input type="text" name="sekolah_asal" placeholder="Asal sekolah" class="text" value="<?php echo $siswa['sekolah_asal'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<?php $jk = $siswa['jenis_kelamin']; ?>
					<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>>Perempuan
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td> : </td>
				<td>
					<?php $agama = $siswa['agama']; ?>
					<select name="agama">
						<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
						<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
						<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
						<option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
						<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button type="submit" value="simpan" name="simpan">Kirim</button></td>
			</tr>
		</table>
	</form>
	</div>

	</body>
</html>
