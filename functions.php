<?php 

$conn = mysqli_connect("localhost", "root", "", "db_buku" );

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {

		$rows[] = $row;
	}
	return $rows;
}

function tambah($buku){
	global $conn;

	$judul = htmlspecialchars($buku["judul"]);
	$genre = htmlspecialchars($buku["genre"]);
	$penulis = htmlspecialchars($buku["penulis"]);

	$query = "INSERT INTO buku VALUES ('', '$judul', '$genre', '$penulis')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($buku){

	global $conn;

	$id = $buku["id"];
	$judul = htmlspecialchars($buku["judul"]);
	$genre = htmlspecialchars($buku["genre"]);
	$penulis = htmlspecialchars($buku["penulis"]);

	$query = "UPDATE buku SET 
				judul = '$judul',
				genre = '$genre',
				penulis = '$penulis'
				WHERE id = $id ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM buku WHERE judul LIKE '%$keyword%' OR 
											genre LIKE '%$keyword%' ";

	return query($query);

}


function registrasi ($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn,$data["Password"]);
	$password2 = mysqli_real_escape_string($conn, $data["Password2"]);

	// cek username
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>alert('username sudah ada');
		</script>";
		return false;
	}


	// konfirm password
	if($password !== $password2){
		echo "<script>alert('Password Tidak Sama!');
		</script>";
		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password') ");

	return mysqli_affected_rows($conn);
}


 ?>