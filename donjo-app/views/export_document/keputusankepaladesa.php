<?php
		$title = 'KeputusanKepala-Desa-' . date('ymd') . '.pdf';
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
			$html='<h1>Data Input Form keputusankepaladesa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['no_urut'].'</td>
						</tr>
						<tr>
							<td>No. Keputusan Kepala Desa</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['jenisperaturandesa'].'</td>
						</tr>
						<tr>
							<td>Tanggal Keputusan Kepala Desa</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['tanggalkeputusankepaladesa'].'</td>
						</tr>

						<tr>
							<td>Tentang</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['tentang'].'</td>
						</tr>
						<tr>
							<td>Uraian Singkat</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['uraiansingkat'].'</td>
						</tr>
						<tr>
							<td>No. Dilaporkan</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['nodilaporkan'].'</td>
						</tr>

						<tr>
							<td>Tanggal Dilaporkan</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['tanggaldilaporkan'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$keputusankepaladesa['keterangan'].'</td>
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