<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Surat Keterangan Domisili Perusahaan.xls");
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
		<!-- <hr width="100%" style="height: 3px;color: black"> -->
		<table width="100%" border="0">
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
				<h2>
					<center>
						<p><u><b>SURAT KETERANGAN</b></u></p>
					</center>
				</h2>
			</td>
		</tr>
		<tr>
			<td colspan="5">
					<center>
						<p style="font-size: 16px">No. <?php echo $rowsurat->nomor_surat;?></p>
					</center>
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
				<p style="font-size: 17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa <?php echo $rowsurat->nama_desa;?> Kecamatan <?php echo $rowsurat->nama_kecamatan;?> Kabupaten <?php echo $rowsurat->nama_kabupaten?> dengan ini menerangkan bahwa :</p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		</table>
		<table width="100%" border="0">
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
				<p>Pekerjaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->pekerjaan;?></p>
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
				<p>Kewarganegaraan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->kewarganegaraan;?></p>
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
		</table>
		<table width="100%">
		<tr>
			<td style="padding-right: 30px;padding-left: 30px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa yang bersangkutan mempunyai perusahaan yang berdomisili di wilayah desa <?php echo $rowsurat->nama_desa;?> dengan keterangan sebagai berikut:</p>
				<br>
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Nama Perusahaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nama_perusahaan;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Alamat Perusahaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->alamat_perusahaan;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Nomor Telepon</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->nomor_telepon;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Jenis Usaha</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->jenis_usaha;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Akta Pendirian/No/Tanggal</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->akta_pendirian;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Jam Kerja</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->jam_kerja;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>jumlah Karyawan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->jumlah_karyawan;?></p>
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td style="padding-right: 30px;padding-left: 30px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Keterangan dipergunakan untuk melengkapipersyaratan perizinan lebih lanjut dan apabila tidak ditindak lanjuti selama 6 (Enam) Bulan, makaSurat Keterangan ini harus diperbaharui.</p>
			</td>
		</tr>
		<tr>
			<td style="padding-right: 30px;padding-left: 30px" colspan="5">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan domisili ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</p>
			</td>
		</tr>	
		</table>
		<table width="100%" border="0">
		<tr>
			<td>
			<center>
				<p>Mengetahui</p>		
			</center>
			</td>
			<td>
			<center>
				<p align="right"><?php echo $rowsurat->nama_kabupaten;?>, <?php echo $rowsurat->tanggal;?><br>Kepala Desa <?php echo $rowsurat->nama_desa;?></p>
			</center>
			</td>
		</tr>
		<tr>
			<td>
				<center>
					<p>Kecamatan <?php echo $rowsurat->nama_kecamatan;?>
				</center>
			</td>
			<td>
				<center>
					<p>Kelurahan <?php echo $rowsurat->nama_desa;?>
				</center>
			</td>
		</tr>
		<tr>
			<td>
				<br><br>
			</td>
			<td>
				<br><br>
			</td>
		</tr>
		<tr>
			<td>
				<center>
					<p><?php echo $rowsurat->penanda_tangan_kecamatan;?>
				</center>
			</td>
			<td>
				<center>
					<p><?php echo $rowsurat->penanda_tangan_kelurahan;?></p>
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