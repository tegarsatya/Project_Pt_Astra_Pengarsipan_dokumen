<?php 
$ID = $_GET['id_dok'];
$query = mysqli_query($connect, "SELECT * FROM surat_masuk WHERE id_dok = $ID");
$data = mysqli_fetch_array($query);
?>
  <h3>Detail Dokumen Masuk</h3>
     <div class="content">
     	<table class="table-form" border="10%" width="50%" cellpadding="10%" cellspacing="50%">
       		 <tr>
                <td>Id Dokumen</td>
                <td width="1%"></td>
                <td><?php echo $data['id_dok']; ?></td>
            </tr>
            <tr>
                <td>Nama Dokumen</td>
                <td width="1%"></td>
                <td><?php echo $data['nama_dok']; ?></td>
            </tr>
            <tr>
                <td>jenis dokumen</td>
                <td width="15%"></td>
                <td><?php echo $data['jenis_dok']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Dokumen</td>
                <td width="1%">:</td>
                <td><?php echo $data['tanggal_dok']; ?>CM</td>
            </tr>
            <tr>
                <td>File</td>
                <td width="1%">:</td>
                <td><?php echo $data['file']; ?>KG</td>
            </tr>
        </table>
    </div>
<a href="index.php?page=surat_masuk" class="btn">Kembali</a>

