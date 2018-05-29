			<div class="span9">
				<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Data Pegawai </h3>
							</div>
							<?php
								if($_SESSION['level'] == 1){

							?>
								<a href="<?php echo base_url()?>log/c_23_log/pdf">
									<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Export PDF</button>
								</a>	
							<?php
								}else{

								}
							?>


							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>NIP</th>
											<th>Log</th>
											<th>Tanggal</th>
										</tr>
									</thead>
									<tbody width="100%">
												<?php
												 foreach ($ambil as $row) {
													echo 
														"
														<tr>
															<td>".$row->nip."</td>
															<td>".$row->aksi."</td>
															<td>".$row->waktu."</td>
														</tr>";
												}	
												?>											
									</tbody>
									<tfoot>
										<tr>
											<th>NIP</th>
											<th>Log</th>
											<th>Tanggal</th>
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
</div>