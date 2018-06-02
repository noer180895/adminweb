<?php
		$title = 'daftarhadirrapatbpd-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Daftar Hadir Rapat Bpd');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form daftarhadirrapat</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$daftarhadirrapat['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$daftarhadirrapat['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td align="left">'.$daftarhadirrapat['nama'].'</td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td align="left">'.$daftarhadirrapat['jabatan'].'</td>
						</tr>

						<tr>
							<td>Tanda Tangan</td>
							<td>:</td>
							<td align="left">'.$daftarhadirrapat['tanda_tangan'].'</td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$daftarhadirrapat['keterangan'].'</td>
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