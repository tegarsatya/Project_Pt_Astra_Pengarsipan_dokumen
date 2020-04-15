<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM dokumen_filling WHERE id_dok='$_GET[id_dok]'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);
	$file	= $data['file'];

	//jika filenya ada, hapus filenya
	if (file_exists("upload/dokumen_filling/$file")) {
		unlink("upload/dokumen_filling/$file");
	}

	$query2	= "DELETE FROM dokumen_filling WHERE id_dok='$_GET[id_dok]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script language=javascript> 
				window.alert("Data dokumen_filling berhasil di hapus");
				window.location.href="index.php?page=dokumen_filling";
			  </script>';
	}else{
		echo '<script>
				window.alert("Data gagal di hapus");
				window.location.href="index.php?page=dokumen_filling";
			  </script>';
	
	}

?>