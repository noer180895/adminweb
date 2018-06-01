<?php
		$title = 'agenda-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form agenda');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form agenda</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$agenda['nama'].'</td>
						</tr>
						<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$agenda['uraian'].'</td>
						</tr>
						<tr>
							<td>Nomor Surat Masuk</td>
							<td>:</td>
							<td align="left">'.$agenda['no_masuk'].'</td>
						</tr>
						<tr>
							<td>Tanggal Surat Masuk</td>
							<td>:</td>
							<td align="left">'.$agenda['tgl_masuk'].'</td>
						</tr>
						<tr>
							<td>Pengiriman Surat Masuk</td>
							<td>:</td>
							<td align="left">'.$agenda['pengiriman'].'</td>
						</tr>
						<tr>
							<td>Isi Surat Masuk</td>
							<td>:</td>
							<td align="left">'.$agenda['isi_surat_masuk'].'</td>
						</tr>
						<tr>
							<td>Nomor Surat Keluar</td>
							<td>:</td>
							<td align="left">'.$agenda['no_surat_keluar'].'</td>
						</tr>

								<tr>
							<td>Tanggal Surat Keluar</td>
							<td>:</td>
							<td align="left">'.$agenda['tgl_surat_keluar'].'</td>
						</tr>
						<tr>
							<td>Ditujukan Kepada</td>
							<td>:</td>
							<td align="left">'.$agenda['di_tujukan_kepada'].'</td>
						</tr>
						<tr>
							<td>Isi Surat Keluar</td>
							<td>:</td>
							<td align="left">'.$agenda['isi_surat_keluar'].'</td>
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