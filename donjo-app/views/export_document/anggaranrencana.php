<?php
		$title = 'anggaran-rencana-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form anggaran');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form anggaran</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$anggaran['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$anggaran['no_urut'].'</td>
						</tr>
						<tr>
							<td>Bidang</td>
							<td>:</td>
							<td align="left">'.$anggaran['bidang'].'</td>
						</tr>
						<tr>
							<td>Kegiatan</td>
							<td>:</td>
							<td align="left">'.$anggaran['kegiatan'].'</td>
						</tr>
						<tr>
							<td>Waktu Pelaksanaan</td>
							<td>:</td>
							<td align="left">'.$anggaran['waktu_pelaksanaan'].'</td>
						</tr>

							<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$anggaran['uraian'].'</td>
						</tr>

							<tr>
							<td>Harga Satuan</td>
							<td>:</td>
							<td align="left">'.$anggaran['harga_satuan'].'</td>
						</tr>



							<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td align="left">'.$anggaran['jumlah'].'</td>
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