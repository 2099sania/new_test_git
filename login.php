<?php 
require 'functions.php';

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if(mysqli_num_rows($result) === 1){
		$row = mysqli_fetch_assoc($result);
		 if (password_verify($password, $row["password"]) ){
		 	header("Location: home.php");
		 	exit;
		 }
	}
}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
		<h1>Login</h1>

		<form action="" method="post">
			
			<ul>
				<li>
					<label for="user">Username :</label>
					<input type="text" name="username" id="user">
				</li>
				<li>
					<label for="pwd">Password :</label>
					<input type="Password" name="password" id="pwd">
				</li>
				<li>
					<button type="submit" name="login">Login</button>
				</li>
			</ul>

		</form>
	</div>
</body>
</html>