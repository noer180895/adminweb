<?php
		$title = 'Keputusanmusyawarah-desa-' . date('ymd') . '.pdf';
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
			$html='<h1>Data Input Form keputusanmusyawarahdesa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahdesa['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahdesa['no_urut'].'</td>
						</tr>
						<tr>
							<td>Tentang</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahdesa['tentang'].'</td>
						</tr>

						<tr>
							<td>Pokok keputusan musyawarah</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahdesa['pokokkeputusanmusyawarah'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahdesa['keterangan'].'</td>
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