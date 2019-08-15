<?php
	$namaserver = 'localhost';
	$userdb = 'root';
	$passdb = '';
	$namadb = 'test';

	$conn = mysqli_connect($namaserver, $userdb, $passdb, $namadb);

	if ($conn == FALSE) {
		die('Koneksi gagal' .mysqli_connect_error());
	}


	$var1 = $_GET['volume'];

	$result = mysqli_query($conn, "INSERT INTO data (data) VALUES ('$var1')");

	if ($result) {
		echo "Insert Berhasil";
	}
	else {
		echo "Insert Gagal";
	}
?>