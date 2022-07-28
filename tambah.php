<?php 
require 'functions.php';

if(isset($_POST["submit"])){

	if (tambah($_POST) > 0) {

		echo "<script>alert('Data Tersimpan!');
		document.location.href = 'home.php';</script>";
	}else{
		echo "<script>alert('Data Tidak Tersimpan!');
		document.location.href = 'home.php';</script>";
	}
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Tambah Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
		<h1>Tambah Data Buku</h1>
		<form action="" method="post">
			<ul>
				<li>
					<label for="judul">Judul :</label>
					<input type="text" name="judul" id="judul" required>
				</li>
				<li>
					<label for="genre">Genre :</label>
					<input type="text" name="genre" id="genre" required>
				</li>
				<li>
					<label for="penulis">Penulis :</label>
					<input type="text" name="penulis" id="penulis" required>
				</li>
				<li>
					<button type="submit" name="submit">Save Data</button>
				</li>
			</ul>
		</form>
	</div>
	
</body>
</html>