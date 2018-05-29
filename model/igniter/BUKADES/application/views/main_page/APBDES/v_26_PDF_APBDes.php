<div class="module-body table">
<div class="content">
			<table border="0">
				<tr>
					<td rowspan="4">
						<img src="<?php echo base_url()?>assets/images/Logo_Desa_Purworejo.png" width="90px" height="110px">
					</td>
					<td>
						<center>
							<p style="font-size:23;padding">PEMERINTAH KABUPATEN PASURUAN</p>
						</center>
					</td>
					<td rowspan="4">
						<img src="<?php echo base_url()?>assets/images/Logo_Pasuruan.png" width="90px" height="110px">
					</td>
				</tr>
				<tr>
					<td>
						<center>
							<p style="font-size:22">Kecamatan Purworejo</p>
						</center>
					</td>
				</tr>
				<tr>
					<td>
						<center>
							<p style="font-size:20">Desa Purwosari</p>
						</center>
					</td>
				</tr>
				<tr>
					<td>
						<center>
							<p style="font-size:15">Alamat : Kel. Purworejo, Desa. Purworejo, Kec. Purworejo, Kab. Pasuruan, Provinsi. Jawa Timur, Kode Pos: 67115</p>
						</center>
					</td>
				</tr>
			</table>
			<hr>
			<div>

           <h3>Data Anggaran Pembangunan Desa</h3>
           <p>Tahun : <?php echo date('Y')?></p>

				<table cellpadding="0" cellspacing="0" border="1" >
					<thead>
						<tr style="background-color:A9A9A9">
							<th style="padding:6px">ID</th>
							<th style="padding:6px">Kegiatan</th>
							<th style="padding:6px">Anggaran</th>
							<th style="padding:6px">Tanggal</th>
							<th style="padding:6px">Penanggung Jawab</th>
							<th style="padding:6px">Tahun</th>
							<th style="padding:6px">Keterangan</th>
						</tr>
						<tr style="background-color:696969">
							<th style="padding:6px">1</th>
							<th style="padding:6px">2</th>
							<th style="padding:6px">3</th>
							<th style="padding:6px">4</th>
							<th style="padding:6px">5</th>
							<th style="padding:6px">6</th>
							<th style="padding:6px">7</th>
						</tr>
					</thead>
						
							<?php
							 foreach ($ambil as $row) {
								echo "<tr>
									<td style='padding:6px'>".$row->id."</td>
									<td style='padding:6px'>".$row->kegiatan."</td>
									<td style='padding:6px'>".$row->anggaran."</td>
									<td style='padding:6px'>".$row->tanggal."</td>
									<td style='padding:6px'>".$row->penanggung_jawab."</td>
									<td style='padding:6px'>".$row->tahun."</td>
									<td style='padding:6px'>".$row->keterangan."</td>
									</tr>";
										
								}	
							?>

					<tfoot>
						<tr>
							<th>ID</th>
							<th>Kegiatan</th>
							<th>Anggaran</th>
							<th>Tanggal</th>
							<th>Penanggung Jawab</th>
							<th>Tahun</th>
							<th>Keterangan</th>
						</tr>
					</tfoot>
				</table>
	</div>
</div>