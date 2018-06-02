<?php
		$title = 'anggaran-data-' . date('ymd') . '.pdf';
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
							<td>Kode Rekening</td>
							<td>:</td>
							<td align="left">'.$anggaran['kode_rekening'].'</td>
						</tr>
						<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$anggaran['uraian'].'</td>
						</tr>
						<tr>
							<td>Anggaran</td>
							<td>:</td>
							<td align="left">'.$anggaran['anggaran'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$anggaran['Keterangan'].'</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td align="left">'.$status.'</td>
						</tr>';

					// $html.='<tr bgcolor="#ffffff">
					// 		<t>'.$anggaran['nama'].'</td>
					// 		<td>'.$anggaran['no_urut'].'</td>
					// 		<td>'.$anggaran['tanggal_pengiriman'].'</td>
					// 		<td>'.$anggaran['tanggal_no_surat'].'</td>
					// 		<td>'.$anggaran['isi_surat'].'</td>
					// 		<td>'.$anggaran['ditujukan_kepada'].'</td>
					// 		<td>'.$anggaran['keterangan'].'</td>
					// 		<td>'.if($anggaran['is_approve'] == 1){ echo 'Approved'; }else if($anggaran['is_approve'] == 2){ echo 'Rejected'; }else{ echo 'Waiting Approval'; }.'</td>
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