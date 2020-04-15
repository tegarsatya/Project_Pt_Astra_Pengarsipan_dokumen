<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM index_dokumen WHERE id_dok='$_GET[id_dok]'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);

	//jika filenya ada, hapus filenya

	$query2	= "DELETE FROM index_dokumen WHERE id_dok='$_GET[id_dok]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script language=javascript> 
				window.alert("Data index Dokumen berhasil di hapus");
				window.location.href="index.php?page=index_dokumen";
			  </script>';
	}else{
		echo '<script>
				window.alert("Data gagal di hapus");
				window.location.href="index.php?page=index_dokumen";
			  </script>';
	
	}

?>