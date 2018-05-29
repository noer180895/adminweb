			<div class="span9">
				<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Data Pegawai </h3>
							</div>
							<?php
								if($_SESSION['level'] == 1){

							?>
								<a href="<?php echo base_url()?>pegawai/c_23_pegawai/viewTambah">
									<button class="btn btn-success" style="margin-left:10px">Tambah Data</button>
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
											<th>Nama</th>
											<th>Nomor Hp</th>
											<th>Tanggal Daftar</th>
											<th>Status</th>
											<th>Foto</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody width="100%">
											
												<?php
												 foreach ($ambil as $row) {
													echo 
														"
													<tr>
														<td>".$row->NIP."</td>
														<td>".$row->nama."</td>
														<td>".$row->hp."</td>
														<td>".$row->tanggal_input."</td>
														<td>".$row->status."</td>
														<td><img src='".base_url()."".$row->foto."' style='width:100%;'></td>
														<td>";
															if($_SESSION['level']==2){
															
															?>
																<a href="<?php echo base_url()?>pegawai/c_23_pegawai/lihat?id=<?php echo $row->NIP?>"><button style='width:100%' class='btn btn-primary'>lihat</button></a>
															<?php

																}else{
															?>
															<a href="<?php echo base_url()?>pegawai/c_23_pegawai/lihat?id=<?php echo $row->NIP?>"><button style='width:100%;margin-bottom:5px' class='btn btn-info'>lihat</button></a>
															<a href="<?php echo base_url()?>pegawai/c_23_pegawai/ubah?id=<?php echo $row->NIP?>"><button style='width:100%;margin-bottom:5px' class='btn btn-primary'>ubah</button></a>
															<a href="<?php echo base_url()?>pegawai/c_23_pegawai/hapus?id=<?php echo $row->NIP?>"><button onclick="return hapus()" style='width:100%;margin-bottom:5px' class='btn btn-danger'>hapus</button></a>
															<?php
															}
															?>
														</td>
													</tr>	
														<?php
												}	
												?>
<script type="text/javascript">
  function hapus () {
    return confirm("Anda yakin akan menghapus data ?");
  }
  function ubah () {
    return confirm("Anda yakin akan mengubah data ?");
  }
  function simpan () {
    return confirm("Anda yakin akan menyimpan data ?");
  }
</script>												
									</tbody>
									<tfoot>
										<tr>
											<th>NIP</th>
											<th>Nama</th>
											<th>Nomor Hp</th>
											<th>Tanggal Daftar</th>
											<th>Status</th>
											<th>Foto</th>
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
</div>