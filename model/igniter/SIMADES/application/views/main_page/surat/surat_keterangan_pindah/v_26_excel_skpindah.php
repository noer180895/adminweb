<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Surat Keterangan pindah.xls");
?>

<div class="content">
	<?php
		foreach ($ambildata as $rowsurat) {
	foreach ($ambilperangkatdesa as $rowperangkat) {
		foreach ($ambilpenandatangan as $rowpenandatangan) {
			
	?>
		<table border="0" width="100%">
		<tr>
			<td colspan="5">
				<h3>
					<center>
					<p style="text-transform: uppercase;">PEMERINTAH KABUPATEN <?php echo $rowsurat->nama_kabupaten; ?> </p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<h2>
					<center>
					<p style="text-transform: uppercase;">KANTOR DESA <?php echo $rowsurat->nama_desa;?></p>
					</center>
				</h2>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<h3>
					<center>
					<p style="text-transform: uppercase;">KECAMATAN <?php echo $rowsurat->nama_kecamatan;?></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<h4>
					<center>
					<p><?php echo $rowperangkat->alamat_desa;?></p>
					</center>
				</h4>
			</td>
		</tr>
		</table>
		<table width="100">
		<tr>
			<td colspan="5">
				<h1>
					<center>
					<p style="width: 100%">____________________________________</p>
					</center>
				</h1>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<h3>
					<center>
						<p><u><b>SURAT KETERANGAN</b></u></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<h4>
					<center>
						<p>No. <?php echo $rowsurat->nomor_surat;?></p>
					</center>
				</h4>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 30px;padding-right: 30px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa <?php echo $rowsurat->nama_desa;?> Kecamatan <?php echo $rowsurat->nama_kecamatan;?> Kabupaten <?php echo $rowsurat->nama_kabupaten;?> dengan ini menerangkan bahwa :</p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		</table>
		<table width="80%">
		<tr>
			<td style="padding-left: 50px">
				<p>Nama Lengkap</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_lengkap;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>NIK</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nomor_nik;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Nomor KK</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nomor_kk?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Jenis Kelamin</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->jenis_kelamin;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Tempat/Tgl.Lahir</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->tempat_tanggal_lahir;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Agama</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->agama;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Warga Negara</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->kewarganegaraan?></p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Alamat Lama</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->alamat;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Desa/Kel.</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_desa;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kecamatan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_kecamatan;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kabupaten</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_kabupaten;?></p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Pindah Ke</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pindah_ke;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Desa/Kel.</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_desa_baru;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kecamatan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_kecamatan_baru;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kabupaten</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_kabupaten_baru;?></p>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Alasan Pindah</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->alasan_pindah;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Jumlah Pengikut</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->jumlah_pengikut;?> Orang</p>
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td style="padding-right: 30px;padding-left: 30px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan pindah rumah ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</p>
			</td>
		</tr>	
		</table>
		<p align="right"><?php echo $rowsurat->nama_desa;?>, <?php echo $rowsurat->tanggal;?></p>
		<p align="right">Kepala Desa <?php echo $rowsurat->nama_desa;?></p>
		<br><br>
		<p align="right"><?php echo $rowsurat->penanda_tangan;?></p>
		</center>
		<?php
	}
}
}
	?>
</div>