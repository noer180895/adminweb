<?php
		$title = 'aparat-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Apart Pemerintah');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form Aparat Pemerintahan</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$aparat['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$aparat['nourut'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$aparat['nama_lengkap'].'</td>
						</tr>
						<tr>
							<td>Nomor Induk</td>
							<td>:</td>
							<td align="left">'.$aparat['tentang'].'</td>
						</tr>
						<tr>
							<td>Nomor Induk Pegawai</td>
							<td>:</td>
							<td align="left">'.$aparat['nomor_tanggalkesepakatan'].'</td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
						</tr>



						<tr>
							<td>Tempat Tanggal Lahir</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
						</tr>


						<tr>
							<td>Agama</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
						</tr>

						<tr>
							<td>Pangkat Golongan</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
						</tr>


						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
						</tr>


						<tr>
							<td>Pendidikan Terakhir</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
						</tr>

							<tr>
							<td>Nomor Tanggal Keputusan Pengangkatan
</td>
							<td>:</td>
							<td align="left">'.$aparat['no_n_tanggal_keputusan_pengangkatan'].'</td>
						</tr>



	<tr>
							<td>Nomor Tanggal Keputusan Pemberentian
</td>
							<td>:</td>
							<td align="left">'.$aparat['no_n_tanggal_keputusan_pemberhentian'].'</td>
						</tr>

							<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$aparat['keterangan'].'</td>
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