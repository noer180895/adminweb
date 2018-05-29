
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
					<a class="btn btn-deffault" href="<?php echo base_url() ?>buku_administrasi/model_c_2/buku_kas_umum/c_23_buku_kas_umum/pdfNya">
						Export PDF
					</a>
				</div>
			</div> <!-- module-head -->
			<div class="module-body" style="clear: both;">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" >
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Tanggal</th>
							<th colspan="4">Kode Rekening</th>
							<th>Uraian</th>
							<th>Penerimaan</th>
							<th>Pengeluaran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<!-- table body -->
					<tbody>
						<?php
							$no = 1;
							foreach ($bukamu as $row) {
								?>
									<tr>
										<td><?php echo $no ?></td>
											<td><?php echo TanggalIndodua($row->tanggal) ?></td>
											<td><?php echo $row->k1 ?></td>
											<td><?php echo $row->k2 ?></td>
											<td><?php echo $row->k3 ?></td>
											<td><?php echo $row->k4 ?></td>
											<td><?php echo $row->uraian ?></td>
											<td><?php echo $row->penerimaan ?></td>
											<td><?php echo $row->pengeluaran ?></td>
											<td>
												<a href='<?php echo base_url()?>buku_administrasi/model_c_2/buku_kas_umum/c_23_buku_kas_umum/hapusItem/<?php echo $row->id ?>' class="btn btn-default"> Hapus </a>
											</td>
									</tr>
								<?php
								$no++;
							}
						?>
						<tr>
							<td></td>
							<form action="<?php echo base_url() ?>buku_administrasi/model_c_2/buku_kas_umum/c_23_buku_kas_umum/fungsiSimpan" method="POST">
								<td><input type="date" name="txtDate" id="inputDate"></td>
								<td>
									<input type="hidden" name="txtNomorRekening" id="inputNomorRekening">
									<input type="text" style="width:30px" readonly name="txtk1" id="inputk1" >
								</td>
								<td><input type="text" style="width:30px" readonly name="txtk2" id="inputk2" ></td>
								<td><input type="text" style="width:30px" readonly name="txtk3" id="inputk3" ></td>
								<td><input type="text" style="width:30px" readonly name="txtk4" id="inputk4" ></td>
								<td><input type="text" readonly name="txtUraian" id="inputUraian" ></td>
								<td><input type="number" name="txtPenerimaan" id="inputPenerimaan"></td>
								<td><input type="number" name="txtPengeluaran" id="inputPengeluaran"></td>
								<td>
									<input type="submit" value="Simpan" id="tombolSimpan" class="btn btn-default" name="cmdSimpan">
								</td>
							</form>
							<!-- <td><a href='".base_url()."buku_administrasi/model_c_2/buku_kas_umum/hapus/$key->id'> Hapus </a></td> -->
						</tr>
					</tbody>
				</table>

				<div id="hiding">
					
				</div> <!-- hiding -->
			</div> <!-- module-body -->
		</div> <!-- module -->
	</div> <!-- span9 -->
</div> <!-- content -->

<?php
	include('include/v_23_rekening.php');
?>
<?php
    function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

    function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 3);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>