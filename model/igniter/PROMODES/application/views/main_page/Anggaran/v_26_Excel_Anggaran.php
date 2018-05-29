<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Tabel Data Anggaran.xls");
?>

<div class="module-body table">
	<div class="content">
<img src="<?php echo base_url()?>assets/images/Logo_Desa_Purworejo.png" width="90px" height="110px">
                    
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

			<h1>Data Anggaran </h1>
			
			<div>
			<table cellpadding="0" cellspacing="0" border="1" >
				<thead>
					<tr>
						<th style="padding:6px">ID</th>
						<th style="padding:6px">Tahun</th>
						<th style="padding:6px">Anggaran</th>
						<th style="padding:6px">Tanggal Masuk</th>
						<th style="padding:6px">Penanggung Jawab</th>
						<th style="padding:6px">Tanggal Diubah</th>
					</tr>
				</thead>
					
						<?php
						 foreach ($ambil as $row) {
							echo "<tr>
								<td style='padding:6px'>".$row->id."</td>
								<td style='padding:6px'>".$row->tahun."</td>
								<td style='padding:6px'>".$row->anggaran."</td>
								<td style='padding:6px'>".$row->tanggal_input."</td>
								<td style='padding:6px'>".$row->penanggung_jawab."</td>
								<td style='padding:6px'>".$row->tanggal_update."</td>
								</tr>";
									
							}	
						?>

				
			</table>
		</div>
	</div>
</div>