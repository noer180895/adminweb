
<script type="text/javascript">
	function tambbah(str) {
		if (str == "bidang") {
			fungsi(str);
		}else if (str == "kegiatan") {
			fungsi(str);
		}else if (str == "item") {
			fungsi(str);
		}
	}

	function fungsi(str) {
		alert(str);
	}
</script>
<div class="content">
	<div class="span9">
		<div class="module">
			<div class="module-head" style="height: 5%">
				<div style="float: left;">
					Buku Anggaran Pendapatan dan Belanja Desa <br>
				</div>
				<div style="float: right;">
					<a class="btn btn-deffault" href="<?php echo base_url() ?>buku_administrasi/model_c_1_a/buku_anggaran_pendapatan_dan_belanja_desa/c_23_buku_APBDes/pdfNya">
						Export PDF
					</a>
				</div>
			</div> <!-- module-head -->
			<?php
				include('include/v_23_tambah_modal.php');
			?>
			<div class="module-body" style="clear: both;">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display">
					<thead>
						<tr>
							<th colspan="4">Kode Rekening</th>
							<th rowspan="2">Uraian</th>
							<th rowspan="2">Tahun Sebelumnya</th>
							<th rowspan="2">Tahun Berjalan</th>
							<th rowspan="2">Keterangan</th>
							<th rowspan="2">Aksi</th>
						</tr>
						<tr>
							<th>K1</th>
							<th>K2</th>
							<th>K3</th>
							<th>K4</th>
						</tr>
					</thead>
					<tbody>
					<!-- table body -->
					<?php
						foreach ($apbdes as $row ) {
							?>
								<tr>
									<td><?php echo $row->k1 ?></td>
									<td><?php echo $row->k2 ?></td>
									<td><?php echo $row->k3 ?></td>
									<td><?php echo $row->k4 ?></td>
									<td><?php echo $row->uraian ?></td>
									<td><?php echo $row->tahun_sebelumnya ?></td>
									<td><?php echo $row->tahun_berjalan ?></td>
									<td><?php echo $row->keterangan ?></td>
									<?php
										if (strlen($row->nomor_rekening) == 1) {
											?>
												<td>
													<a class="btn btn-primary" data-toggle="modal" data-id="<?php echo $row->nomor_rekening ?>" id="cmdTambah" style="width: 80%">Tambah Bidang
												</a>
											<?php
										}elseif (strlen($row->nomor_rekening) == 3 || strlen($row->nomor_rekening) == 5) {
											?>
												<td>
													<a class="btn btn-primary" data-toggle="modal" data-id="<?php echo $row->nomor_rekening ?>" id="cmdTambah" style="width: 80%">Tambah Kegiatan
												</a>
											<?php
										}elseif (strlen($row->nomor_rekening) > 6 ) {
											?>
												<td>
													<a class="btn btn-primary" data-toggle="modal" data-id="<?php echo $row->nomor_rekening ?>" id="cmdTambah" style="width: 80%">Tambah Item
												</a>
											<?php
										}
									?>
													<a href="<?php echo base_url() ?>buku_administrasi/model_c_1_a/buku_anggaran_pendapatan_dan_belanja_desa/c_23_buku_APBDes/hapusItem/<?php echo $row->id ?>" class="btn btn-danger" style="width: 80%;margin:5px 0 0 0">Hapus Item</a>
												</td>
								</tr>
							<?php
						}
					?>
					</tbody>

				</table>

				<div id="hiding">
					
				</div> <!-- hiding -->
			</div> <!-- module-body -->
		</div> <!-- module -->
	</div> <!-- span9 -->
</div> <!-- content -->