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
		</div><br>
		<!-- <hr width="100%" style="height: 3px;color: black"> -->
		<table width="100%" border="0">
		<tr>
			<td>
				<h3>
					<center>
						<p><u><b>SURAT KETERANGAN DOMISILI PERUSAHAAN</b></u></p>
					</center>
				</h3>
			</td>
		</tr>
		<tr>
			<td>
					<center>
						<p style="font-size: 16px">Nomor : <?php echo $rowsurat->nomor_surat;?></p>
					</center>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 30px;padding-right: 30px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa <?php echo $rowperangkat->nama_desa;?> Kecamatan <?php echo $rowperangkat->nama_kecamatan;?> Kabupaten <?php echo $rowperangkat->nama_kabupaten?> dengan ini menerangkan bahwa :</p>
			</td>
		</tr>
		</table>
		<center>
			
		<table width="100%" border="0">
		<tr>
			<td style="padding-left: 50px;">
				<p>Nama</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><b><?php echo $rowsurat->nama;?></b></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px;">
				<p>Nomor KTP</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->no_ktp;?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->jenis_kelamin;?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->tempat_lahir." / ".TanggalBerlaku($rowsurat->tanggal_lahir);?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->kewarganegaraan;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Status Pernikahan</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->status_perkawinan;?></p>
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
				<p>Alamat</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->alamat;?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->jabatan;?></p>
			</td>
		</tr>
		</table>
		</center>
		<table width="100%">
		<tr>
			<td style="padding-right: 30px;padding-left: 30px">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa yang bersangkutan mempunyai perusahaan yang berdomisili di wilayah desa <?php echo $rowperangkat->nama_desa;?> dengan keterangan sebagai berikut:</p>
				<br>
			</td>
		</tr>
		</table>
		<table width="100%" border="0">
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
				<p style="text-transform: capitalize;"><b><?php echo $rowsurat->nama_perusahaan;?></b></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->alamat_perusahaan;?></p>
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
				<p style="text-transform: capitalize;"><?php echo $rowsurat->nomor_telepon;?></p>
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
				<p style="text-transform: capitalize;">Notaris : <?php echo $rowsurat->notaris_pendirian;?></p>
				<p style="text-transform: capitalize;">Nomor : <?php echo $rowsurat->nomor_pendirian;?>, Tgl. <?php echo TanggalBerlaku($rowsurat->tanggal_pendirian);?> </p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Bergerak dalam bidang</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->jenis_usaha;?></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>jumlah Pegawai</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->jumlah_karyawan;?> (<?php echo $rowsurat->terbilang;?>) Orang</p>
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
				<p style="text-transform: capitalize;">Mulai Jam <?php echo $rowsurat->jam_kerja;?> s/d <?php echo $rowsurat->jam_kerja_sampai;?> WIB.</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px">
				<p>Luas Tanah yang Digunakan usaha</p>
			</td>
			<td>
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->luas_tanah;?> m2</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 50px;padding-right: 43px">
				<p>Luas Bangunan yang digunakan usaha</p>
			</td>
			<td style="padding-right: 15px">
				<p>:</p>
			</td>
			<td>
				<p style="text-transform: capitalize;"><?php echo $rowsurat->luas_bangunan;?> m2</p>
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
				<p><?php 
						if($rowsurat->berlaku==""){

						}else{
					?>
				Surat Keterangan Domisili Perusahaan ini, berlaku sampai dengan : <?php echo TanggalBerlaku($rowsurat->berlaku);?>
				<?php
			}
			?>
			</p>
			</td>
		</tr>
		<tr>
			<td style="padding-right: 30px;padding-left: 30px">
				<center>
					<p><b><h3>DICATAT DI BUKU REGISTER KELURAHAN DAN KECAMATAN</h3></b></p>
				</center>
			</td>
		</tr>	
		</table>
		<?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                    ?>
                                        <table width="100%" border="0">
                                            <tr>
                                                <td width="50%">
                                                    <table style="text-align: left;margin-top: 25px;padding-left: 80px" border="0">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <p class="fontbawah">Tanggal :</p>
                                                                <p class="fontbawah">Nomor :</p>
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
                                                    <table style="text-align: center;margin-top: 25px;padding-right: 80px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $rowperangkat->nama_kabupaten ?>, 
                                                                <?php
                                                                   echo TanggalIndo(date("d m Y"));
                                                                ?>
                                                                
                                                            </td>
                                                        </tr>
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
<?php
    function TanggalBerlaku($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>