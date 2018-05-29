<?php
	$a = date('H')+5;
	$nama_dokumen='Surat Keterangan Permohonan Izin Mendirikan Bangunan '.TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF 
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: attachment; filename=".$nama_dokumen.".doc");
?>
<div class="content">
<?php
	foreach ($ambildata as $rowsurat) {
	foreach ($ambilperangkatdesa as $rowperangkat) {
		foreach ($ambilpenandatangan as $rowpenandatangan) {
	
?>
		<div style="border-bottom: solid;">
			
		<table border="0" width="100%">
		<tr>
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
		</div><br>
		<table width="100%">
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<h3>
					<center>
						<p><u><b>SURAT KETERANGAN PERMOHONAN IMB</b></u></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td>
				<h4>
					<center>
						<p>Nomor : <?php echo $rowsurat->nomor_surat;?></p>
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
			<td style="padding-left: 30px;padding-right: 30px">
				<p>Yang bertanda tangan di bawah ini :</p>
			</td>
		</tr>
		<tr>
			<td>
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
				<p style="text-transform: uppercase;"><?php echo $rowsurat->nama_kades;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Jabatan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: uppercase;"><?php echo $rowsurat->jabatan_kades;?></p>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 30px;padding-right: 30px">
				<p>Menerangkan Bahwa :</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Nama</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: uppercase;"><?php echo $rowsurat->nama;?></p>
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
				<p style="text-transform: uppercase;"><?php echo $rowsurat->pekerjaan;?></p>
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
				<p style="text-transform: uppercase;"><?php echo $rowsurat->alamat;?></p>
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
			<td style="padding-left: 30px;padding-right: 30px">
				<p>yang bersangkutan mengajukan permohonan izin untuk :</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 30px;padding-right: 30px">
				<p>Mendirikan bangunan baru / bangunan tambahan / mengubah sebagian atau seluruh bangunan / membongkar sebagian atau seluruh bangunan :</p>
			</td>
		</tr>
		</table>
		<table width="100%">
		<tr>
			<td style="padding-left: 50px;padding-right: 93px">
				<p>Terletak diatas persil</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: uppercase;"><?php echo $rowsurat->persil_nomor."/".$rowsurat->persil_nama_pemilik."/".$rowsurat->persil_alamat_bidang."/".$rowsurat->persil_penggunaan_tanah."/".$rowsurat->pemanfaatan_tanah;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Status Tanah</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: uppercase;"><?php echo $rowsurat->status_tanah;?></p>
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
			<td style="padding-left: 30px;padding-right: 30px" colspan="3">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atas Permohonan tersebut, kami menyatakan bahwa persil/tanah yang dimohonkan IMB benar-benar memilik pemohon serta terdapat suatu masalah atau tidak  dalam sengketa tanah / bangunan.</p>
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
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan permohonan izin mendirikan bangunan ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</p>
			</td>
		</tr>	
		</table>
		<?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                             
                                    ?>
                                         <table width="100%">
                                            <tr>
                                                <td width="50%" style="text-align: right;">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $rowperangkat->nama_kabupaten ?>, 
                                                                <?php
                                                                   echo TanggalIndo(date("d-m-Y"));
                                                                ?>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="fontbawah" style="text-transform: capitalize;">Kepala Desa <?php echo $rowperangkat->nama_desa;?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $rowperangkat->nama_kepala_desa."<br>NIP. ".$rowpenandatangan->nip_kades;
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