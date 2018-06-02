<?php
		$title = 'datanotulenrapatbpd-desa-data-' . date('ymd') . '.pdf';
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
			$html='<h1>Data Input Form datanotulenrapatbpd</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$datanotulenrapatbpd['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$datanotulenrapatbpd['no_urut'].'</td>
						</tr>
						<tr>
							<td>Hari/tanggal</td>
							<td>:</td>
							<td align="left">'.$datanotulenrapatbpd['hari'].'</td>
						</tr>
						<tr>
							<td>Materi Rapat</td>
							<td>:</td>
							<td align="left">'.$datanotulenrapatbpd['materirapat'].'</td>
						</tr>

						<tr>
							<td>Peserta</td>
							<td>:</td>
							<td align="left">'.$datanotulenrapatbpd['peserta'].'</td>
						</tr>
						<tr>
							<td>Ringkasan Pembahasan</td>
							<td>:</td>
							<td align="left">'.$datanotulenrapatbpd['ringkasanpembahasan'].'</td>
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