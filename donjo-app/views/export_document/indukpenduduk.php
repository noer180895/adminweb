<?php
		$title = 'Induk-Penduduk-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Induk Penduduk');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form indukpenduduk</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['nama_lengkap'].'</td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['jenis_kelamin'].'</td>
						</tr>
						<tr>
							<td>Status Perkawinan</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['status'].'</td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['tempat_lahir'].'</td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['tanggal_lahir'].'</td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['agama'].'</td>
						</tr>
						<tr>
							<td>Pendidikan Terakhir</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['pendidikan_terakhir'].'</td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['pekerjaan'].'</td>
						</tr>
						<tr>
							<td>Dapat Membaca Huruf</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['flag_baca'].'</td>
						</tr>
						<tr>
							<td>Kewarganeraraan</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['warganegara'].'</td>
						</tr>
						<tr>
							<td>Alamat Lengkap</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['alamat_lengkap'].'</td>
						</tr>
						<tr>
							<td>Kedudukan Dalam Keluarga</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['kedudukan'].'</td>
						</tr>
						<tr>
							<td>Nomor Induk Kependudukan</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['nik'].'</td>
						</tr>
						<tr>
							<td>Nomor Kartu Keluarga</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['nkk'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$indukpenduduk['keterangan'].'</td>
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