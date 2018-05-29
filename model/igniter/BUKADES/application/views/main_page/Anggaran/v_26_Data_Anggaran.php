<div class="span9">
	<div class="content">
		<div class="module">
				<div class="module-head">
					<h3>Anggaran</h3>
				</div>
				<?php
					if($_SESSION['level'] == 1){

				?>
					<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/tambah">
						<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Tambah Data</button>
					</a>
					
					<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/pdf">
						<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Export PDF</button>
					</a>

					<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/excel">
						<button class="btn btn-success" style="margin-left:10px;margin-top:10px">Export Excel</button>
					</a>	
				<?php
					}else{

					}
				?>

				
				<div class="module-body table">
					<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display"  width="100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tahun</th>
								<th>Anggaran</th>
								<th>Tanggal Masuk</th>
								<th>Penanggung Jawab</th>
								<th>Tanggal Diubah</th>
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
										<td>".$row->tahun."</td>
										<td>".$row->anggaran."</td>
										<td>".$row->tanggal_input."</td>
										<td>".$row->penanggung_jawab."</td>
										<td>".$row->tanggal_update."</td>
										<td>";
											if($_SESSION['level']==2){
											
											?>
												<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/lihat?id=<?php echo $row->id?>"><button style='width:100%' class='btn btn-info'>Lihat</button></a>
											<?php

												}else{
											?>
											<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/lihat?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' class='btn btn-info'>Lihat</button></a>
											<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/Ubah?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' class='btn btn-primary'>ubah</button></a>
											<a href="<?php echo base_url()?>Anggaran/c_26_Anggaran/hapus?id=<?php echo $row->id?>"><button style='width:100%;margin-bottom:5px' onClick='return hapus()' class='btn btn-danger'>Hapus</button></a>
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
								<th>ID</th>
								<th>Tahun</th>
								<th>Anggaran</th>
								<th>Tanggal Masuk</th>
								<th>Penanggung Jawab</th>
								<th>Tanggal Diubah</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div><!--/.module-->
		</div>
	</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	function hapus() {
		return confirm("Apakah anda benar akan menghapus data ?");
	}


</script>