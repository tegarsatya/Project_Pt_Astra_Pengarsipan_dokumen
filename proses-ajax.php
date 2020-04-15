<?php 

include "koneksi.php";

if(isset($_GET['id'])){
	$id = intval($_GET['id']);

	$query = "SELECT * FROM dokumen_filling where id_dok=$id";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_assoc($sql);
	// json_encode($data, JSON_UNESCAPED_SLASHES, JSON_PRETTY_PRINT);
	$json = json_encode($data);
	echo $json; 
} else {
	echo 'gagal';
}

 ?>