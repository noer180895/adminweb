<?php
		$title = 'Kaderpemberdayaan-masyarakat-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Kader Pemberdayaan Masyarakat');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form kaderpemberdayaanmasyarakat</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['nama_lengkap'].'</td>
						</tr>
						<tr>
							<td>Umur</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['umur'].'</td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['jenis_kelamin'].'</td>
						</tr>
						<tr>
							<td>Pendidikan</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['pendidikan'].'</td>
						</tr>
						<tr>
							<td>Bidang</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['bidang'].'</td>
						</tr>

						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['alamat'].'</td>
						</tr>
						<tr>
							<td>keterangan</td>
							<td>:</td>
							<td align="left">'.$kaderpemberdayaanmasyarakat['keterangan'].'</td>
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