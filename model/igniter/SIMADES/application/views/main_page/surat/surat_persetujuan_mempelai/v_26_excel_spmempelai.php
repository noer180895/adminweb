<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Surat Persetujuan Mempelai.xls");
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
				<p>Calon Suami</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Nama Lengkap</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_suami;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Bin</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->bin;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Pekerjaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pekerjaan_suami;?></p>
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
				<p><?php echo $rowsurat->tempat_tanggal_lahir_suami;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Kewarganegaraan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->kewarganegaraan_suami;?></p>
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
				<p><?php echo $rowsurat->agama_suami;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Pekerjaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pekerjaan_suami;?></p>
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
				<p><?php echo $rowsurat->alamat_suami;?></p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Calon Istri</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Nama Lengkap</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_istri;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Binti</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->binti;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Pekerjaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pekerjaan_istri;?></p>
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
				<p><?php echo $rowsurat->tempat_tanggal_lahir_istri;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Kewarganegaraan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->kewarganegaraan_istri;?></p>
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
				<p><?php echo $rowsurat->agama_istri;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Pekerjaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pekerjaan_istri;?></p>
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
				<p><?php echo $rowsurat->alamat_istri;?></p>
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td style="padding-left: 50px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</p>
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
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat persetujuan mempelai ini kami buat, untuk dapat dipergunakan sebagaimana mestinya</p>
			</td>
		</tr>	
		</table>
		
		<p align="right"><?php echo $rowsurat->nama_kabupaten;?>, <?php echo $rowsurat->tanggal;?></p>
		<table width="100%">
			<tr>
				<td>
				<center>
					<p>I. Calon Suami</p>	
				</center>
				</td>
				<td>
				<center>
					<p>II. Calon Istri</p>	
				</center>
				</td>
			</tr>
			<tr>
				<td>
					<br><br><br>
				</td>
			</tr>
			<tr>
				<td>
				<center>
					<p><?php echo $rowsurat->nama_suami;?></p>	
				</center>
				</td>
				<td>
				<center>
					<p><?php echo $rowsurat->nama_istri;?></p>	
				</center>
				</td>
			</tr>
		</table>
		</center>
<?php
}
}
}
?>
</div>