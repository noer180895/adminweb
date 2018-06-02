<?php
		$title = 'dataaspirasimasyarakat-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Data Aspirasi Masyarakat');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form dataaspirasimasyarakat</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$dataaspirasimasyarakat['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$dataaspirasimasyarakat['no_urut'].'</td>
						</tr>
						<tr>
							<td>Hari/tanggal</td>
							<td>:</td>
							<td align="left">'.$dataaspirasimasyarakat['hari'].'</td>
						</tr>
						<tr>
							<td>Nama Lembaga</td>
							<td>:</td>
							<td align="left">'.$dataaspirasimasyarakat['namalembaga'].'</td>
						</tr>

						<tr>
							<td>Aspirasi yang disampaikan</td>
							<td>:</td>
							<td align="left">'.$dataaspirasimasyarakat['aspirasiyangdisampaikan'].'</td>
						</tr>

						<tr>
							<td>Tindak Lanjut</td>
							<td>:</td>
							<td align="left">'.$dataaspirasimasyarakat['tindaklanjut'].'</td>
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