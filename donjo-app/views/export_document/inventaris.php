<?php
		$title = 'inventaris-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form inventaris');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form inventaris</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$inventaris['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$inventaris['no_urut'].'</td>
						</tr>
						<tr>
							<td>Jenis Barang / Bangunan</td>
							<td>:</td>
							<td align="left">'.$inventaris['jenis_barang_at_bangunan'].'</td>
						</tr>
						<tr>
							<td>Asal Barang / Bangunan</td>
							<td>:</td>
							<td align="left">'.$inventaris['asal_barang_bangunan'].'</td>
						</tr>
						<tr>
							<td>Keadaan Barang / Bangunan Awal Tahun</td>
							<td>:</td>
							<td align="left">'.$inventaris['keadaanbarang'].'</td>
						</tr>
						<tr>
							<td>Penghapusan Barang</td>
							<td>:</td>
							<td align="left">'.$inventaris['penghapusanbarang'].'</td>
						</tr>
						<tr>
							<td>Tanggal Penghapusan</td>
							<td>:</td>
							<td align="left">'.$inventaris['tanggal_penghapusan'].'</td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$inventaris['keterangan'].'</td>
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