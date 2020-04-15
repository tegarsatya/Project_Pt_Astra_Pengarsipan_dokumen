
	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Index Dokumen</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						
 						<h2>Form Index Dokumen</h2> &nbsp; &nbsp;
 							<?php
							if($_SESSION['level'] == 'admin'){
							?>
 						<a href="index.php?page=tambah_index_dokumen" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah index Dokumen </a>
 						<?php
							 }
							 ?>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="index_dokumen" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 12px;">
									<th width="1" style="vertical-align: middle;"><center>No</center></th>
 									<th width="1" style="vertical-align: middle;"><center>ID Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Nama Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Jenis Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Tanggal</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Posisi Rak</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM index_dokumen";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)){
 									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['id_dok'] ?><br> </td>
 									<td style="vertical-align: middle;"><?php echo $data['nama_dok'] ?><br> </td>
 									<td style="vertical-align: middle;"><?php echo $data['jenis_dok'] ?></br></td>
 									<td style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal'])?></td>
 									<td style="vertical-align: middle;"><?php echo $data['posisi_rak'] ?></br></td>
 									<td>
 										<center>
 											<?php  if($_SESSION['level']== 'admin') {?>
 											<a href="index.php?page=edit_index_dokumen&id_dok=<?php echo $data['id_dok']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_index_dokumen&id_dok=<?php echo $data['id_dok'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											<a href="cetak_disposisi.php?id_dok=<?php echo $data['id_dok']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>

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
