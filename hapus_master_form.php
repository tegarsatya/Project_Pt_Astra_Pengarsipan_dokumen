<?php
	include 'koneksi.php';

	$query 	= "SELECT * FROM master_form WHERE id_form='$_GET[id_form]'";
	$sql	= mysqli_query($connect, $query);
	$data 	= mysqli_fetch_array($sql);
	$uppload_form = $data['uppload_form'];
	//jika filenya ada, hapus filenya
	if (file_exists("upload/master/$uppload_form")) {
		unlink("upload/master/$uppload_form");
	}

	$query2	= "DELETE FROM master_form WHERE id_form='$_GET[id_form]'";
	$sql2	= mysqli_query($connect, $query2);
	if ($sql2) {
		echo '<script> 
				window.alert("Data berhasil di hapus");
				window.location.href="./index.php?page=master_form";
			 </script>';
	}else{
		echo '<script> 
				window.alert("Data gagal di hapus");
			 </script>';
	}
?>