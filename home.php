<?php 

require 'functions.php';

$buku = query("SELECT * FROM buku");

if (isset($_GET["cari"])) {
	$buku = cari($_GET["keyword"]);
}

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Utama</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<header>
			<h1>Logo</h1>
			<ul>
				<li><a href="index.php">Keluar</a></li>
			</ul>
		</header>
		<div class="boxbuku">
		<h1>List Buku</h1>
		<a href="tambah.php">Tambah</a>
		<br><br>

		<form action="" method="get">
		<input type="text" name="keyword" size="50" autofocus placeholder="Masukkan Keyword Pencarian...." autocomplete="off">
		<button type="submit" name="cari">Search</button>
		</form>
		<br><br>

		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Judul Buku</th>
				<th>Genre Buku</th>
				<th>Penulis</th>
			</tr>

			<?php $i = 1; ?>
			<?php foreach( $buku as $row ) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a>
				</td>
				<td><?= $row["judul"]; ?></td>
				<td><?= $row["genre"]; ?></td>
				<td><?= $row["penulis"]; ?></td>
			</tr>
			<?php 	$i++; ?>

		<?php endforeach; ?>

		</table>
		</div>
		<footer>
			<p>SANIA &copy 2022</p>
		</footer>


	
</body>
</html>