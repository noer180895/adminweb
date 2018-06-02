<?php
		$title = 'ktpkeluarga-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Ktp Keluarga');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form ktp keluarga</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nomor keluarga</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['nomor_keluarga'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['nama_lengkap'].'</td>
						</tr>
						<tr>
							<td>Nik</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['nik'].'</td>
						</tr>

								<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['jenis_kelamin'].'</td>
						</tr>


									<tr>
							<td>Tempat Tanggal Lahir</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['tempat_tanggal_lahir'].'</td>
						</tr>


						<tr>
							<td>Gol Darah</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['gol_darah'].'</td>
						</tr>

										<tr>
							<td>Agama</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['agama'].'</td>
						</tr>




						<tr>
							<td>Pendidikan</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['pendidikan'].'</td>
						</tr>


								<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['pekerjaan'].'</td>
						</tr>


											<tr>
							<td>Status Perkawinan</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['status'].'</td>
						</tr>



						<tr>
							<td>Status Hub Keluarga
</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['status_hub_kel'].'</td>
						</tr>


						<tr>
							<td>Kewarganegaraan
</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['warganegara'].'</td>
						</tr>

											<tr>
							<td>Ayah
</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['ayah'].'</td>
						</tr>

					<tr>
							<td>Ibu
</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['ibu'].'</td>
						</tr>

					<tr>
							<td>Tanggal Mulai Tinggal	
</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['tanggal_mulai_tinggal'].'</td>
						</tr>


						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$ktpkeluarga['keterangan'].'</td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td align="left">'.$status.'</td>
						</tr>';

			$html.='</table>';
			$pdf->writeHTML($html, true, false, true, false, '');
			$pdf->Output($title, 'I');
?>