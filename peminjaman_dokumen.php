
	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Peminjaman Dokumen</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2> Form Peminjaman Dokumen </h2> &nbsp; &nbsp;<a href="index.php?page=tambah_peminjaman_dokumen" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Peminjaman Dokumen </a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="peminjaman_dokumen" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 13px;">
									<td width="1" style="vertical-align: middle;"><center>No</center></td>
 									<td width="1" style="vertical-align: middle;"><center>ID Peminjaman</center></td>
 									<td width="1" style="vertical-align: middle;"><center>Nama Peminjam</center></td>
									<td width="1" style="vertical-align: middle;"><center>Nama Dokumen</center></td>
 									<td width="1" style="vertical-align: middle;"><center>Tanggal Pinjam </center></td>
 									<td width="1" style="vertical-align: middle;"><center>Tanggal Kembali</center></td>

 									<td width="1" style="vertical-align: middle;"><center>Action</center></td>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM peminjaman_dokumen ";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)){
 									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['id_peminjaman'] ?><br> </td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['nama_peminjam'] ?><br> </td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['nama_dokumen'] ?><br> </td>
 									<td width="1" style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal_pinjam'])?></td>
 									<td width="1" style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal_kembali'])?></td>
 									<td>
 										<center>
 											<a href="index.php?page=edit_peminjaman_dokumen&id=<?php echo $data['id']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_peminjaman_dokumen&id=<?php echo $data['id'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>

											<?php  if($_SESSION['level']== 'admin') {?>
 											<a href="cetak_peminjaman_dokumen.php?id_dok=<?php echo $data['id']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>

 											<?php } ?>
 											<?php  if($_SESSION['level']== 'user') {?>
 											<a href="cetak_peminjaman_dokumen_user.php?id=<?php echo $data['id']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>
 											<?php } ?>
 										</center>
 									</td>
 								</tr>
 								<?php } ?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
