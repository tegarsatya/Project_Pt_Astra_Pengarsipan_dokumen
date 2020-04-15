
	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Jenis Dokumen</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2>Dokumen Masuk</h2> &nbsp; &nbsp;<a href="index.php?page=tambah_jenis_dokumen" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Jenis Dokumen Masuk</a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="surat_masuk" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 13px;">
									<th width="1" style="vertical-align: middle;">No</th>
 									<th width="1" style="vertical-align: middle;">ID Dokumen</th>
 									<th><center>Jenis Dokumen<br></center></th>
 									<th style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no
 										=1;
 										$query	= "SELECT * FROM jenis_dokumen";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)){
 									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['id_dok'] ?><br> </td>
 									<td style="vertical-align: middle;"><?php echo $data['jenis_dok'] ?><br>
 									</td>
 									<td>
 										<center>
 											<a href="index.php?page=hapus_jenis_dokumen&id_dok=<?php echo $data
 											['id_dok'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											<a href="index.php?page=edit_jenis_dokumen&id_dok=<?php echo $data['id_dok']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<?php  if($_SESSION['level']== 'admin') {?>
 											<?php } ?>

 										</center>
 									</td>
 								</tr>
 							</tbody>
 							<?php } ?>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
