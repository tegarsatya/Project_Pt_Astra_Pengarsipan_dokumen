
	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Dokumen Filling</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2>Form Dokumen Filling</h2> &nbsp; &nbsp;<a href="index.php?page=tambah_dokumen_filling" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Dokumen Filling</a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="dokumen_filling" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 12px;">
									<th width="1" style="vertical-align: middle;"><center>No</center></th>
 									<th width="1" style="vertical-align: middle;"><center>ID Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Nama Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Jenis Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Upload File</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Tanggal</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM dokumen_filling";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)){
 									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['id_dok'] ?><br> </td>
 									<td style="vertical-align: middle;"><?php echo $data['nama_dok'] ?><br> </td>
 									<td style="vertical-align: middle;"><?php echo $data['jenis_dok'] ?></td>
 									<td width="1" style="vertical-align: middle;"> <a href="upload/dokumen_filling/<?php echo $data['file']?>" class="btn btn-default btn-xs fa fa-download">&nbsp;<?php echo $data['file']; ?> </a>
 									</br></td>
 									<td><?php echo IndonesiaTgl($data['tanggal'])?></td>

 									<td>
 										<center>
 											<a href="index.php?page=edit_dokumen_filling&id_dok=<?php echo $data['id_dok']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_dokumen_filling&id_dok=<?php echo $data['id_dok'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											<?php  if($_SESSION['level']== 'admin') {?>
 											<a href="cetak_dokumen_filling.php?id_dok=<?php echo $data['id_dok']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>
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
