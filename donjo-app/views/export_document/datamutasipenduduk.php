<?php
		$title = 'datamutasipenduduk-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Data Notulen Rapat BPD');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form datamutasipenduduk</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['nama_lengkap'].'</td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['tempat_lahir'].'</td>
						</tr>

						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['tanggal_lahir'].'</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['jenis_kelamin'].'</td>
						</tr>
						<tr>
							<td>Kewarganeraraan</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['flag_baca'].'</td>
						</tr>
						<tr>
							<td>Jenis Mutasi</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['status'].'</td>
						</tr>
						<tr>
							<td>Alasan</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['alasan'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['tanggal'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$datamutasipenduduk['keterangan'].'</td>
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