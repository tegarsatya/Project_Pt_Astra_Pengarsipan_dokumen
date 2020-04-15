<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM peminjaman_dokumen WHERE id='$_GET[id]'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);

	//jika filenya ada, hapus filenya

	$query2	= "DELETE FROM peminjaman_dokumen WHERE id='$_GET[id]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script language=javascript> 
				window.alert("Data peminjaman_dokumen berhasil di hapus");
				window.location.href="index.php?page=peminjaman_dokumen";
			  </script>';
	}else{
		echo '<script>
				window.alert("Data gagal di hapus");
				window.location.href="index.php?page=peminjaman_dokumen";
			  </script>';
	
	}

?>