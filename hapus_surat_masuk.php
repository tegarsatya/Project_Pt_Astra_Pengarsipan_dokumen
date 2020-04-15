<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM dokumen_masuk WHERE id_dok='$_GET[id_dok]'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);
	$file	= $data['file'];

	//jika filenya ada, hapus filenya
	if (file_exists("upload/surat_masuk/$file")) {
		unlink("upload/surat_masuk/$file");
	}

	$query2	= "DELETE FROM dokumen_masuk WHERE id_dok='$_GET[id_dok]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script language=javascript> 
				window.alert("Data Dokumen masuk berhasil di hapus");
				window.location.href="index.php?page=surat_masuk";
			  </script>';
	}else{
		echo '<script>
				window.alert("Data gagal di hapus, Data Disposisi Masih tersimpan");
				window.location.href="index.php?page=surat_masuk";
			  </script>';
	}$query3	= "DELETE FROM disposisi WHERE id_dok='$_GET[id_dok]'";
	$sql3	= mysqli_query($connect, $query3);
	if ($sql3) {
		echo '<script language=javascript> 
				window.alert("Data surat masuk berhasil di hapus");
				window.location.href="index.php?page=surat_masuk";
			  </script>';
	}else{
		echo '<script>
				window.alert("Data gagal di hapus, Data Disposisi Masih tersimpan");
				window.location.href="index.php?page=surat_masuk";
			  </script>';
	}

?>