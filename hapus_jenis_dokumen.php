<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM jenis_dokumen WHERE id_dok='$_GET[id_dok]'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);

	$query2	= "DELETE FROM jenis_dokumen WHERE id_dok='$_GET[id_dok]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script> 
				window.alert("Data jenis_dokumen berhasil di hapus");
				window.location.href="./index.php?page=jenis_dokumen";
			 </script>';
	}else{
		echo '<script> 
				window.alert("Data gagal di hapus");
			 </script>';
	}

?>