<?php
	

	$server = "localhost";
	$user = "root";
	$password = "";
	$database_name = "pendaftaran_siswa";

	$db = mysqli_connect($server, $user, $password, $database_name);

	if( !$db ){
		die("gagal terhubung dengan database:" . mysqli_connect_error());
	}
?>