			<div class="span9">
				<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Data Anggaran Pembangunan Desa</h3>
							</div>
							<?php
								if($_SESSION['level'] == 1){

							?>
								<a href="<?php echo base_url()?>APBDes/c_26_APBDes/tambah">
									<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Tambah Data</button>
								</a>

								<a href="<?php echo base_url()?>APBDes/c_26_APBDes/pdf">
									<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Export PDF</button>
								</a>

								<a href="<?php echo base_url()?>APBDes/c_26_APBDes/excel">
									<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Export Excel</button>
								</a>

							<?php
								}else{

								}
							?>


							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Id</th>
											<th>Kegiatan</th>
											<th>Anggaran</th>
											<th>Tanggal</th>
											<th>Penanggung Jawab</th>
											<th>Tahun</th>
											<th>Keterangan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
											<tr>
												<?php
												 foreach ($ambil as $row) {
													echo 
														"
														<td>".$row->id."</td>
														<td>".$row->kegiatan."</td>
														<td>".$row->anggaran."</td>
														<td>".$row->tanggal."</td>
														<td>".$row->penanggung_jawab."</td>
														<td>".$row->tahun."</td>
														<td>".$row->keterangan."</td>
														<td>";
															if($_SESSION['level']==2){
															
															?>
																<a href="<?php echo base_url()?>APBDes/c_26_APBDes/lihat?id=<?php echo $row->id?>"><button style='width:100%' class='btn btn-primary'>Lihat</button></a>
															<?php

																}else{
															?>
															<a href="<?php echo base_url()?>APBDes/c_26_APBDes/lihat?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' class='btn btn-primary'>Lihat</button></a>
															<a href="<?php echo base_url()?>APBDes/c_26_APBDes/ubah?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' class='btn btn-primary'>Ubah</button></a>
															<a href="<?php echo base_url()?>APBDes/c_26_APBDes/hapus?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' onClick='return hapus()' class='btn btn-primary'>Hapus</button></a>
															<?php
															}
															?>
														</td>
														</tr>	
														<?php
												}	
												?>
									</tbody>
									<tfoot>
										<tr>
											<th>Id</th>
											<th>Kegiatan</th>
											<th>Anggaran</th>
											<th>Tanggal</th>
											<th>Penanggung Jawab</th>
											<th>Tahun</th>
											<th>Keterangan</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div></div></div>
<script type="text/javascript">
	function hapus() {
		return confirm("Apakah anda benar akan menghapus data ?");
	}


</script>