<?php
		$title = 'laporankeuangan-bpd-' . date('ymd') . '.pdf';
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
			$html='<h1>Data Input Form laporankeuanganbpd</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$laporankeuanganbpd['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$laporankeuanganbpd['no_urut'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$laporankeuanganbpd['tanggal'].'</td>
						</tr>
						<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$laporankeuanganbpd['uraian'].'</td>
						</tr>

						<tr>
							<td>Penerimaan Rp</td>
							<td>:</td>
							<td align="left">'.$laporankeuanganbpd['penerimaan'].'</td>
						</tr>
						<tr>
							<td>Pengeluaran Rp</td>
							<td>:</td>
							<td align="left">'.$laporankeuanganbpd['pengeluaran'].'</td>
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