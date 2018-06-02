<?php
		$title = 'bank-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form bank');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form bank desa</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$bank['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$bank['no_urut'].'</td>
						</tr>
						<tr>
							<td>Bulan</td>
							<td>:</td>
							<td align="left">'.$bank['bulan'].'</td>
						</tr>
						<tr>
							<td>Bank Cabang</td>
							<td>:</td>
							<td align="left">'.$bank['bank_cabang'].'</td>
						</tr>
						<tr>
							<td>Rekening No</td>
							<td>:</td>
							<td align="left">'.$bank['rekening_no'].'</td>
						</tr>

							<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$bank['tanggal'].'</td>
						</tr>

							<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$bank['uraian'].'</td>
						</tr>


						<tr>
							<td>Pemasukan Setoran</td>
							<td>:</td>
							<td align="left">'.$bank['pemasukan_setoran'].'</td>
						</tr>


							<tr>
							<td>Pemasukan Bunga Bank</td>
							<td>:</td>
							<td align="left">'.$bank['pemasukan_bunga_bank'].'</td>
						</tr>

							<tr>
							<td>Pengeluaran Penarikan</td>
							<td>:</td>
							<td align="left">'.$bank['pengeluaran_penarikan'].'</td>
						</tr>

							<tr>
							<td>Pengeluaran Pajak</td>
							<td>:</td>
							<td align="left">'.$bank['pengeluaran_pajak'].'</td>
						</tr>


						<tr>
							<td>Pengeluaran Biaya Administrasi</td>
							<td>:</td>
							<td align="left">'.$bank['pengeluaran_biaya_administrasi'].'</td>
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