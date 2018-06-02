<?php
		$title = 'KeputusanMusyawarahPerencanaanPembangunan-desa-' . date('ymd') . '.pdf';
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
			$html='<h1>Data Input Form keputusanmusyawarahperpemdesa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahperpemdesa['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahperpemdesa['No_Urut'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahperpemdesa['hari_tanggal'].'</td>
						</tr>
						<tr>
							<td>Pokok Usulan Kegiatan</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahperpemdesa['pokokusulankegiatan'].'</td>
						</tr>

						<tr>
							<td>keterangan</td>
							<td>:</td>
							<td align="left">'.$keputusanmusyawarahperpemdesa['keterangan'].'</td>
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