			<div class="span9">
				<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Data APBDes Pendapatan</h3>
							</div>
							<?php
								if($_SESSION['level'] == 1){

							?>

								<a href="">
									<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Export PDF</button>
								</a>

								<a href="">
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
											<th>Kode Rekening</th>
											<th>Uraian</th>
											<th>Anggaran</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
											<tr>
												<?php
												 foreach ($ambil as $row) {

													echo 
														"
														<td>".$row->nomor_rekening."</td>
														<td>".$row->uraian."</td>
														<td>".$row->anggaran."</td>
														<td>";
															$cek = $row->tahun;
															if($cek < date('Y')){

															}else{

																if($_SESSION['level']==2){
																
																?>
																	<a href="<?php echo base_url()?>APBDes/c_26_APBDes/tambahapbdespendapatan?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' class='btn btn-info'>Buat Data</button></a>
																	
																<?php

																	}else{
																?>
																<a href="<?php echo base_url()?>APBDes/c_26_APBDes/tambahapbdespendapatan?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' class='btn btn-info'>Buat Data</button></a>
																<?php
																}
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
											<th>Kode Rekening</th>
											<th>Uraian</th>
											<th>Anggaran</th>
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