<?php
		$title = 'agenda-surat-keluar' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form agenda surat keluar');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form agenda surat keluar</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$agenda['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$agenda['no_urut'].'</td>
						</tr>
						<tr>
							<td>Tanggal Penerimaan Surat</td>
							<td>:</td>
							<td align="left">'.$agenda['tanggal_penerimaan'].'</td>
						</tr>
						<tr>
							<td>Nomor</td>
							<td>:</td>
							<td align="left">'.$agenda['nomor'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$agenda['tanggal'].'</td>
						</tr>
						<tr>
							<td>Tujuan</td>
							<td>:</td>
							<td align="left">'.$agenda['tujuan'].'</td>
						</tr>
						<tr>
							<td>Isi Surat</td>
							<td>:</td>
							<td align="left">'.$agenda['isi_surat'].'</td>
						</tr>

								<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$agenda['keterangan'].'</td>
						</tr>
						

						<tr>
							<td>Status</td>
							<td>:</td>
							<td align="left">'.$status.'</td>
						</tr>';

					// $html.='<tr bgcolor="#ffffff">
					// 		<t>'.$agenda['nama'].'</td>
					// 		<td>'.$agenda['no_urut'].'</td>
					// 		<td>'.$agenda['tanggal_pengiriman'].'</td>
					// 		<td>'.$agenda['tanggal_no_surat'].'</td>
					// 		<td>'.$agenda['isi_surat'].'</td>
					// 		<td>'.$agenda['ditujukan_kepada'].'</td>
					// 		<td>'.$agenda['keterangan'].'</td>
					// 		<td>'.if($agenda['is_approve'] == 1){ echo 'Approved'; }else if($agenda['is_approve'] == 2){ echo 'Rejected'; }else{ echo 'Waiting Approval'; }.'</td>
					// 	</tr>';
			$html.='</table>';
			$pdf->writeHTML($html, true, false, true, false, '');
			$pdf->Output($title, 'I');


// $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
// $pdf->SetTitle('My Title');
// $pdf->SetHeaderMargin(30);
// $pdf->SetTopMargin(20);
// $pdf->setFooterMargin(20);
// $pdf->SetAutoPageBreak(true);
// $pdf->SetAuthor('Author');
// $pdf->SetDisplayMode('real', 'default');

// $pdf->AddPage();

// $pdf->Write(5, 'Some sample text');
// $pdf->Output('My-File-Name.pdf', 'I');
?>