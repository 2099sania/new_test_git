<?php 

require 'functions.php';

if (isset($_POST["registrasi"])){
	if(registrasi($_POST) > 0){
		echo "<script>
				alert('user baru berhasil ditambahkan');
			</script>";
	}else{
		echo mysqli_error($conn);
	}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<div class="box">
		<h1>Registrasi</h1>
		<form action="" method="post">
			<ul>
				<li>
					<label for="user">Username :</label>
					<input type="text" id="user" name="username">
				</li>
				<li>
					<label for="pwd">Password :</label>
					<input type="Password" id="pwd" name="Password">
				</li>
				<li>
					<label for="pwd2">Konfirmasi Password :</label>
					<input type="Password" id="pwd" name="Password2" class="ipt">
				</li>
				<li>
					<button type="submit" name="registrasi">Sign Up</button>
				</li>
			</ul>
		</form>
		</div>
</body>
</html>