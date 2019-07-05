<?php
// kode buku tamu untuk menyimpan file data di txt
	echo "<head><title>My Guest Book</head></title>";

	$fp = fopen("guestbook.txt","a+");

	$nama = $_POST['nama'];
	$Sekolah = $_POST['school'];
	$alamat = $_POST['adress'];
	$tanggal = $_POST['date'];
	$umur= $_POST['age'];
	$Gender = $_POST['pilih'];
	
	fputs($fp,"$nama . $Sekolah . $alamat . $tanggal . $umur . $Gender\n");
	fclose($fp);

// untuk menampilkan ketika selesai mengisi buku tamu
	echo "ASyappp <br>";
	
?>