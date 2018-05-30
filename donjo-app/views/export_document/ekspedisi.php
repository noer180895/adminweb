<?php
		$title = 'ekspedisi-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Ekspedisi');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form Ekspedisi</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['no_urut'].'</td>
						</tr>
						<tr>
							<td>Tanggal Pengiriman</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['tanggal_pengiriman'].'</td>
						</tr>
						<tr>
							<td>Tanggal No Surat</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['tanggal_no_surat'].'</td>
						</tr>
						<tr>
							<td>Isi Surat</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['isi_surat'].'</td>
						</tr>
						<tr>
							<td>Ditujukan Kepada</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['ditujukan_kepada'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$ekspedisi['keterangan'].'</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td align="left">'.$status.'</td>
						</tr>';

					// $html.='<tr bgcolor="#ffffff">
					// 		<t>'.$ekspedisi['nama'].'</td>
					// 		<td>'.$ekspedisi['no_urut'].'</td>
					// 		<td>'.$ekspedisi['tanggal_pengiriman'].'</td>
					// 		<td>'.$ekspedisi['tanggal_no_surat'].'</td>
					// 		<td>'.$ekspedisi['isi_surat'].'</td>
					// 		<td>'.$ekspedisi['ditujukan_kepada'].'</td>
					// 		<td>'.$ekspedisi['keterangan'].'</td>
					// 		<td>'.if($ekspedisi['is_approve'] == 1){ echo 'Approved'; }else if($ekspedisi['is_approve'] == 2){ echo 'Rejected'; }else{ echo 'Waiting Approval'; }.'</td>
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