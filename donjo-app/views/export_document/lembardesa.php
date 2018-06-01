<?php
		$title = 'lembar-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form peraturan');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form lembar desa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$lembar['nama'].'</td>
						</tr>
						<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$lembar['uraian'].'</td>
						</tr>
						<tr>
							<td>Jenis Peraturan Desa</td>
							<td>:</td>
							<td align="left">'.$lembar['jenis_peraturan_desa'].'</td>
						</tr>
						<tr>
							<td>Nomor dan Tanggal ditetapkan</td>
							<td>:</td>
							<td align="left">'.$lembar['no_ditetapkan_n_tgl_ditetapkan'].'</td>
						</tr>
						<tr>
							<td>Tentang</td>
							<td>:</td>
							<td align="left">'.$lembar['tentang'].'</td>
						</tr>

						<tr>
							<td>Tanggal Diundangkan	</td>
							<td>:</td>
							<td align="left">'.$lembar['tgl_berita_desa'].'</td>
						</tr>
						<tr>
							<td>Nomor Diundangkan</td>
							<td>:</td>
							<td align="left">'.$lembar['no_berita_desa'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$lembar['keterangan'].'</td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td align="left">'.$status.'</td>
						</tr>';

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