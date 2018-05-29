<div class="content">
<?php
	foreach ($ambildata as $rowsurat) {
	foreach ($ambilperangkatdesa as $rowperangkat) {
		foreach ($ambilpenandatangan as $rowpenandatangan) {
	
?>
		<div style="border-bottom: solid;">
			
		<table border="0" width="100%">
		<tr>
			<td rowspan="4" width="100px">
					<img style="margin-top: -10px;" src="<?php echo $rowperangkat->logo_desa;?>" width="80px" height="100px">
			</td>
			<td>
				<h3>
					<center>
					<p style="text-transform: uppercase;">PEMERINTAH KABUPATEN <?php echo $rowperangkat->nama_kabupaten; ?> </p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td>
				<h3>
					<center>
					<p style="text-transform: uppercase;">KANTOR DESA <?php echo $rowperangkat->nama_desa;?></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td>
				<h3>
					<center>
					<p style="text-transform: uppercase;">KECAMATAN <?php echo $rowperangkat->nama_kecamatan;?></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td>
				<h4>
					<center>
					<p><?php echo $rowperangkat->alamat_desa;?></p>
					</center>
				</h4>
			</td>
		</tr>
		</table>
		</div>
		<?php echo "<p style='text-align:right'>".$rowperangkat->nama_desa." , ".TanggalIndo(date('d m Y'))."</p>";?>
		<table width="100%">
			<tr>
				<td>
					<table width="80%">
						<tr>
							<td>
								<p>Nomor</p>
							</td>
							<td>
								<p>:</p>
							</td>
							<td>
								<p><?php echo $rowsurat->nomor_surat;?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Lampiran</p>
							</td>
							<td>
								<p>:</p>
							</td>
							<td>
								<p><?php echo $rowsurat->lampiran;?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Perihal</p>
							</td>
							<td>
								<p>:</p>
							</td>
							<td>
								<p><b><?php $rowsurat->perihal;?>Permohonan mendapatkan <u>Kartu Tanda Penduduk(KTP)</u></b></p>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" border="0" style="padding-left: 10px">
						<tr>
							<td>
								<p></p>
							</td>
							<td>
								<p>Kepada</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Yth.</p>
							</td>
							<td>
								<p>Kepala Kependudukan dan Catatan Sipil Kabupaten Kaur di.-</p>
							</td>
						</tr>
						<tr>
							<td>
								<p></p>
							</td>
							<td style="padding-left: 10px">
								<p><b><u><?php echo $rowsurat->kepada?></u></b></p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="100%">
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 30px;padding-right: 30px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa <?php echo $rowperangkat->nama_desa;?> Kecamatan <?php echo $rowperangkat->nama_kecamatan;?> Kabupaten <?php echo $rowperangkat->nama_kabupaten;?> dengan ini menerangkan bahwa :</p>
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
				<p>Tempat / Tgl.Lahir</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->tempat_lahir." / ".$rowsurat->tanggal_lahir;?></p>
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
				<p>Golongan Darah</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->golongan_darah;?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->agama;?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->pekerjaan;?></p>
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
			<td style="padding-right: 30px;padding-left: 30px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini dimohon kepada Bapak, untuk dapat mengeluarkan seperti tersebut pada perihal surat diatas, bahwa yang bersangkutan benar-benar Penduduk Desa <?php echo $rowperangkat->nama_desa?> Kecamatan <?php echo $rowperangkat->nama_kecamatan?> Kabupaten <?php echo $rowperangkat->nama_kabupaten?>, dan belum  mempunyai identitas Kartu Tanda Penduduk (KTP).</p>
			</td>
		</tr>	
		</table>
		<table>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td style="padding-right: 30px;padding-left: 30px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini dibuat dengan sebenarnya, atas perhatian serta perkenan Bapak diucapkan terima kasih.</p>
			</td>
		</tr>	
		</table>
		<br>
		<?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                    ?>
                                        <table width="100%" border="0">
                                            <tr>
                                                <td width="50%">
                                                    <table style="text-align: left;margin-top: 25px;padding-left: 40px" border="0">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                            	<center>
                                                                	<p class="fontbawah" style="padding-left: 20px">Mengetahui</p>
                                                            	</center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;text-transform: uppercase;"><p class="fontbawah">Kecamatan <?php echo $rowperangkat->nama_kecamatan?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px;text-align: center">
                                                            <?php
                                                               echo $rowpenanda->nama_camat?><br><?php
                                                               echo "NIP. ".$rowpenanda->nip_camat;
                                                            ?>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="50%" style="text-align: right;">
                                                    <table style="text-align: center;margin-top: 25px;padding-right: 40px">
                                                        
                                                        <tr>
                                                            <td style="text-transform: uppercase;"><p class="fontbawah">Kepala Desa <?php echo $rowperangkat->nama_desa?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $rowperangkat->nama_kepala_desa?><br><?php
                                                               echo "NIP. ".$rowpenanda->nip_kades;
                                                            ?>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div> <!-- #bawah -->
                                        <?php
                                    }
                                }
                                ?>  
		</center>
<?php
}
}
}
?>
</div>

<?php
    function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>