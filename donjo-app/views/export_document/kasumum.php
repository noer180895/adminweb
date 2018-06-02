<?php
		$title = 'kas-umum-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form kas umum');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form kas umum</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$kas['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$kas['no_urut'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$kas['tanggal'].'</td>
						</tr>
						<tr>
							<td>Bidang</td>
							<td>:</td>
							<td align="left">'.$kas['kode_rekening'].'</td>
						</tr>
						<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$kas['uraian'].'</td>
						</tr>
				

						<tr>
							<td>Penerimaan</td>
							<td>:</td>
							<td align="left">'.$kas['penerimaan'].'</td>
						</tr>

						<tr>
							<td>Pengeluaran</td>
							<td>:</td>
							<td align="left">'.$kas['pengeluaran'].'</td>
						</tr>

						<tr>
							<td>Jumlah Pengeluaran Komulatif</td>
							<td>:</td>
							<td align="left">'.$kas['jml_pengeluaran_kumulatif'].'</td>
						</tr>

						<tr>
							<td>Saldo Kas</td>
							<td>:</td>
							<td align="left">'.$kas['saldo_kas'].'</td>
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