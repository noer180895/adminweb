<?php
		$title = 'Datatanahdidesa-bpd-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Data Tanah Didesa');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form datatanahdidesa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nama Perorangan/Badan Hukum</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['namaperorangan_badanhukum'].'</td>
						</tr>
						<tr>
							<td>Jumlah M2</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['jumlahm2'].'</td>
						</tr>

						<tr>
							<td>Status Hak Tanah</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['statushaktanah'].'</td>
						</tr>
						<tr>
							<td>Sudah Bersertifikat</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['sudah_bertifikat_opt'].'</td>
						</tr>

						<tr>
							<td>Pengguna Tanah (M2)</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['penggunatanahm2'].'</td>
						</tr>
						<tr>
							<td>Non Pertanian</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['non_pertanian_opt'].'</td>
						</tr>
						<tr>
							<td>Pertanian</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['pertanian_opt'].'</td>
						</tr>
						<tr>
							<td>Lain-lain</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['lainlain'].'</td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$datatanahdidesa['keterangan'].'</td>
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