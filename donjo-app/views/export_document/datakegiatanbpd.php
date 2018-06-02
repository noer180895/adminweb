<?php
		$title = 'datakegiatanbpd-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Data Kegiatan BPD');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form datakegiatanbpd</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['no_urut'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['tanggal'].'</td>
						</tr>
						<tr>
							<td>Jenis Kegiatan</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['jeniskegiatan'].'</td>
						</tr>

						<tr>
							<td>Pelaksanaan</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['pelaksanaan'].'</td>
						</tr>
						<tr>
							<td>Hasil Kegiatan</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['hasilkegiatan'].'</td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$datakegiatanbpd['keterangan'].'</td>
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