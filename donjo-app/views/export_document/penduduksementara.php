<?php
		$title = 'penduduk-sementara-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form penduduk');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form penduduk sementara</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$penduduk['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$penduduk['nama_lengkap'].'</td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$penduduk['jenis_kelamin'].'</td>
						</tr>


						<tr>
							<td>Tempat Tanggal Lahir</td>
							<td>:</td>
							<td align="left">'.$penduduk['tempat_n_tanggal_lahir'].'</td>
						</tr>

						<tr>
							<td>Datang Dari</td>
							<td>:</td>
							<td align="left">'.$penduduk['datang_dari'].'</td>
						</tr>

						<tr>
							<td>Maksud Dan Tujuan</td>
							<td>:</td>
							<td align="left">'.$penduduk['tujuan_kedatangan	'].'</td>
						</tr>



						<tr>
							<td>Nama Dan Alamat yg di datangi	</td>
							<td>:</td>
							<td align="left">'.$penduduk['alamat_tujuan_datang	'].'</td>
						</tr>



						<tr>
							<td>Tanggal Datang	</td>
							<td>:</td>
							<td align="left">'.$penduduk['tanggal_datang'].'</td>
						</tr>



						<tr>
							<td>Tanggal Pergi	
</td>
							<td>:</td>
							<td align="left">'.$penduduk['tanggal_pergi'].'</td>
						</tr>


						<tr>
							<td>Keterangan
</td>
							<td>:</td>
							<td align="left">'.$penduduk['keterangan'].'</td>
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