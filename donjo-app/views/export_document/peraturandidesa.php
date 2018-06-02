<?php
		$title = 'peratuandidesa-bpd-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Peraturan didesa');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form peraturandidesa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['no_urut'].'</td>
						</tr>
						<tr>
							<td>Jenis Peraturan Desa</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['jenisperaturandesa'].'</td>
						</tr>
						<tr>
							<td>No. Peraturan Desa</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['noperaturandesa'].'</td>
						</tr>

						<tr>
							<td>Tanggal Ditetapkan Peraturan Desa</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['tanggalditetapkanperaturandesa'].'</td>
						</tr>
						<tr>
							<td>Tentang</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['tentang'].'</td>
						</tr>
						<tr>
							<td>Tgl Dilaporkan</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['tgl_lapor'].'</td>
						</tr>

						<tr>
							<td>No. Diundangkan Dalam Lembaran Desa</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['nodiundangkandalamlembarandesa'].'</td>
						</tr>
						<tr>
							<td>No. Diundangkan Dalam Berita Desa</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['nodiundangkandalamberitadesa'].'</td>
						</tr>
						<tr>
							<td>keterangan</td>
							<td>:</td>
							<td align="left">'.$peraturandidesa['keterangan'].'</td>
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