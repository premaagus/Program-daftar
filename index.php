<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pendaftaran siswa</title>
		<link rel="stylesheet" href="Css/style.css">
	</head>
	
	
	<body>
		<div class="container">
			<div class="kotak">
				<h3>Pendaftaran Siswa Baru</h3>
				<h1>SMK TI Bali Global</h1>
				<div class="tombol">
					<a href="form-daftar.php">Daftar</a>
				</div>
				<p>Sudah Terdaftar?</p>
				<div class="tombol">
					<a href="list-siswa.php">List Siswa</a>
				</div>
				<?php if(isset($_GET['status'])): ?>
					<p>
						<?php
							if($_GET['status'] == 'sukses'){
								echo "Pendaftaran siswa baru berhasil!";
								} 
						else {
								echo "Pendaftaran gagal!";
							}
						?>
	</p>
<?php endif; ?>
			</div>
		</div>
	</body>
</html>