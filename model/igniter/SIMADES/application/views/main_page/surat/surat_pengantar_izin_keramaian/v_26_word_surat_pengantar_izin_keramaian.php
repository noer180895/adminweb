<?php
	$a = date('H')+5;
	$nama_dokumen='Surat Pengantar Izin Keramaian '.TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
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
		</div>
		<?php echo "<p style='text-align:right'>".$rowperangkat->nama_desa." , ".date('d-M-Y')."</p>";?>
		<table width="100%">
			<tr>
				<td>
					<table width="100%">
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
								<p><b><?php $rowsurat->perihal;?>Izin Keramaian dan <u>Pemakaian Jalan Raya</u></b></p>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%" border="0" style="padding-left: 80px">
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
							<td style="padding-left: 20px">
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
				<p>Dengan Hormat,</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan pemohon saudara <?php echo $rowsurat->penyampai;?></p>
				<p style="text-align: justify;">yang telah menghadap kepada Kepala Desa <?php echo $rowperangkat->nama_kepala_desa?> , seperti tersebut pada perihal surat diatas, maka dengan ini dimohon kepada bapakagar kiranya dapat memberikan izin yang dimaksud, adapun sebagai bahan pertimbangan Bapak bersama ini disampaikan data-data yang bersangkutan :</p>
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
				<p>Umur</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->umur." (".$rowsurat->terbilang.")";?> Tahun</p>
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
				<p>Acara</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->acara;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>waktu Pelaksanaan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->waktu_pelaksanaan_awal." - ".$rowsurat->waktu_pelaksanaan_akhir;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Alamat / Tempat</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p><?php echo $rowsurat->tempat;?></p>
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
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian semoga kiranya Bapak dapat menindak lanjuti Pemberitahuan ini, atas kerjasama yang baik kami ucapkan banyak terima kasih.</p>
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