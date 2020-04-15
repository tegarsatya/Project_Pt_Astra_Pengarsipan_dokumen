<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM dokumen_penyusutan WHERE tanggal_penyusutan='$_GET[tanggal_penyusutan]'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);

	//jika filenya ada, hapus filenya

	$query2	= "DELETE FROM dokumen_penyusutan WHERE tanggal_penyusutan='$_GET[tanggal_penyusutan]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script language=javascript> 
				window.alert("Data berhasil di hapus");
				window.location.href="index.php?page=penyusutan_dokumen";
			  </script>';
	}else{
		echo '<script>
				window.alert("Data gagal di hapus");
				window.location.href="index.php?page=penyusutan_dokumen";
			  </script>';
	
	}

?>