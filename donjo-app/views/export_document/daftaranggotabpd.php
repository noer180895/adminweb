<?php
		$title = 'daftaranggotabpd-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Daftar Anggota Bpd');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form daftaranggota</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['uraian'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['namalengkap'].'</td>
						</tr>
						<tr>
							<td>NIP</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['nip'].'</td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['jeniskelamin'].'</td>
						</tr>

						<tr>
							<td>Tempat & Tanggal Lahir</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['tempattanggallahir'].'</td>
						</tr>

						<tr>
							<td>Agama</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['agama'].'</td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['jabatan'].'</td>
						</tr>
						<tr>
							<td>Pendidikan Terakhir</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['pendidikanterakhir'].'</td>
						</tr>

						<tr>
							<td>Tanggal Keputusan Pengangkatan</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['tanggalkeputusanpengangkatan'].'</td>
						</tr>

						<tr>
							<td>Tanggal Keputusan Pemberhentian</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['tanggalkeputusanpemberhentian'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$daftaranggotabpd['keterangan'].'</td>
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