<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Surat Keterangan kematian.xls");
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
				<p>Nama</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama;?></p>
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
				<p>Alamat</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->alamat;?></p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px" colspan="5">
				<p>Orang  tersebut diatas, telah <b>meninggal dunia pada</b> :</p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Hari, Tanggal</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->hari_tanggal;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Jam</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->jam;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Pada Usia</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pada_usia;?> Tahun</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Dikarenakan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->dikarenakan;?></p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td style="padding-right: 30px;padding-left: 30px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan kematian ini kami buat, untuk dapat dipergunakan sebagaimana mestinya</p>
			</td>
		</tr>	
		</table>
		<br><br><br>
		<p align="right"><?php echo $rowsurat->nama_kabupaten;?>, <?php echo $rowsurat->tanggal;?></p>
		<p align="right">Kepala Desa <?php echo $rowsurat->nama_desa;?></p>
		<br><br><br>
		<p align="right"><?php echo $rowsurat->penanda_tangan?></p>
		</center>
<?php
}
}
}
?>
</div>