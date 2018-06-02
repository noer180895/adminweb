<?php
		$title = 'kas-pembantu-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form kas pembantu');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form kas pembantu</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$kas['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$kas['no_urut'].'</td>
						</tr>
						<tr>
							<td>Bidang</td>
							<td>:</td>
							<td align="left">'.$kas['bidang'].'</td>
						</tr>
						<tr>
							<td>Kegiatan</td>
							<td>:</td>
							<td align="left">'.$kas['kegiatan'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$kas['tanggal'].'</td>
						</tr>

						<tr>
							<td>Penerimaan Bendahara</td>
							<td>:</td>
							<td align="left">'.$kas['penerimaan_bendahara'].'</td>
						</tr>

						<tr>
							<td>Penerimaan Swadaya Masyarakat</td>
							<td>:</td>
							<td align="left">'.$kas['penerimaan_masyarakat'].'</td>
						</tr>

						<tr>
							<td>Nomor Bukti</td>
							<td>:</td>
							<td align="left">'.$kas['nomor_bukti'].'</td>
						</tr>

						<tr>
							<td>Belanja Barang dan Jasa</td>
							<td>:</td>
							<td align="left">'.$kas['belanja_barang_jasa'].'</td>
						</tr>

						<tr>
							<td>Belanja Modal</td>
							<td>:</td>
							<td align="left">'.$kas['belanja_modal'].'</td>
						</tr>

						<tr>
							<td>Jumlah Pengembalian Bendahara</td>
							<td>:</td>
							<td align="left">'.$kas['jml_kembali_bendahara'].'</td>
						</tr>

						<tr>
							<td>Saldo Kas</td>
							<td>:</td>
							<td align="left">'.$kas['saldo_kas'].'</td>
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