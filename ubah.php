<?php 
require 'functions.php';

$id = $_GET["id"];

	$buku = query("SELECT * FROM buku WHERE id = $id")[0];

	if(isset($_POST["submit"])){

		if (ubah($_POST) > 0) {

			echo "<script>alert('Data Success Diupdate!');
			document.location.href = 'home.php';</script>";
		}else{
			echo "<script>alert('Data Tidak Diupdate!');
			document.location.href = 'home.php';</script>";
		}
	}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Ubah Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
		<h1>Ubah Data Buku</h1>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?= $buku["id"]; ?>">
			<ul>
				<li>
					<label for="judul">Judul :</label>
					<input type="text" name="judul" id="judul" required value="<?= $buku["judul"]; ?>">
				</li>
				<li>
					<label for="genre">Genre :</label>
					<input type="text" name="genre" id="genre" required value="<?= $buku["genre"]; ?>">
				</li>
				<li>
					<label for="penulis">Penulis :</label>
					<input type="text" name="penulis" id="penulis" required value="<?= $buku["penulis"]; ?>">
				</li>
				<li>
					<button type="submit" name="submit">Save Data</button>
				</li>
			</ul>
		</form>
	</div>
	
</body>
</html>