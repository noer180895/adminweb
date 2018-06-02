<?php
		$title = 'inventarishasil-pembangunan-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Inventaris Hasil Pembangunan');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form inventarishasilpembangunan</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['no_urut'].'</td>
						</tr>
						<tr>
							<td>Jenis/Nama hasil pembangunan</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['nama_hasil_pembangunan'].'</td>
						</tr>
						<tr>
							<td>Volume</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['volume'].'</td>
						</tr>

						<tr>
							<td>Biaya</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['biaya'].'</td>
						</tr>
						<tr>
							<td>Lokasi</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['lokasi'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$inventarishasilpembangunan['keterangan'].'</td>
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