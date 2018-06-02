<?php
		$title = 'dataperaturankeputusan-bpd-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Data Peraturan BPD');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form dataperaturankeputusanbpd</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['No_Urut'].'</td>
						</tr>
						<tr>
							<td>Hari/tanggal</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['noperaturan_bpd'].'</td>
						</tr>
						<tr>
							<td>Materi Rapat</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['tanggalperatutan_bpd'].'</td>
						</tr>

						<tr>
							<td>Peserta</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['hasilkeputusan_bpd'].'</td>
						</tr>
						<tr>
							<td>Ringkasan Pembahasan</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['tentang'].'</td>
						</tr>
						<tr>
							<td>Ringkasan Pembahasan</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['uraiansingkat'].'</td>
						</tr>
						<tr>
							<td>Ringkasan Pembahasan</td>
							<td>:</td>
							<td align="left">'.$dataperaturankeputusanbpd['keterangan'].'</td>
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