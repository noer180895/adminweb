<?php
	$a = date('H')+5;
	$nama_dokumen='Surat Keterangan SKCK '.TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
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
						<p><u><b>SURAT KETERANGAN SKCK</b></u></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td>
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
				<p>Tempat/Tgl.Lahir</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->tempat_lahir." / ".TanggalIndodua($rowsurat->tanggal_lahir);?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->pekerjaan?></p>
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
		</table>
		<table width="100%">
		<tr>
			<td style="padding-left: 30px;padding-right: 30px" colspan="3">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang  tersebut diatas, adalah <b>benar-benar warga kami dan berkelakuan baik di masyarakat.</b> Surat keterangan ini dibuat untuk keperluan <b>pengurusan SKCK.</b></p>
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
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan pembuatan skck ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</p>
			</td>
		</tr>	
		</table>
		<br>
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
                                                                   echo date("d-M-Y")
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
</div>