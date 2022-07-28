<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0){
	echo "
			<script>
				alert('Ok! Dihapus');
				document.location.href = 'home.php';
			</script>
		";
	}else {
		echo "
			<script>
				alert('Maaf, Gagal!');
				document.location.href = 'home.php';
			</script>
		";
	}

 ?>