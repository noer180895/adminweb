<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Tabel Data APBDes.xls");
?>

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
            		<h4><?php echo date('d-m-Y')?></h4>

				<table cellpadding="0" cellspacing="0" border="1" >
					<thead>
						<tr>
							<th>ID</th>
							<th>Kegiatan</th>
							<th>Anggaran</th>
							<th>Tanggal</th>
							<th>Penanggung Jawab</th>
							<th>Tahun</th>
							<th>Keterangan</th>
						</tr>
					</thead>
						
							<?php
							 foreach ($ambil as $row) {
								echo "<tr>
									<td>".$row->id."</td>
									<td>".$row->kegiatan."</td>
									<td>".$row->anggaran."</td>
									<td>".$row->tanggal."</td>
									<td>".$row->penanggung_jawab."</td>
									<td>".$row->tahun."</td>
									<td>".$row->keterangan."</td>
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