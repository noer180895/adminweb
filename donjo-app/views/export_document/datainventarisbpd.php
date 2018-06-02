<?php
		$title = 'DataInventaris-bpd-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form Data Inventaris BPD');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form datainventarisbpd</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['no_urut'].'</td>
						</tr>
						<tr>
							<td>Bangunan</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['bangunan'].'</td>
						</tr>
						<tr>
							<td>APBDES</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['apbdes'].'</td>
						</tr>

						<tr>
							<td>Bantuan  Pemerintah</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['bantuan_pemerintah'].'</td>
						</tr>
						<tr>
							<td>Bantuan  Provinsi</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['bantuan_provinsi'].'</td>
						</tr>
						<tr>
							<td>Bantuan  Kab/Kota</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['bantuan_kota'].'</td>
						</tr>
						<tr>
							<td>Bantuan Sumbangan</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['bantuan_sumbangen'].'</td>
						</tr>
						<tr>
							<td>Keadaan Barang awal</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['keadaan_brg_awal'].'</td>
						</tr>
						<tr>
							<td>Tipe Penghapusan</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['tipe_penghapusan'].'</td>
						</tr>
						<tr>
							<td>Tanggal Penghapusan</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['tanggal_penghapusan'].'</td>
						</tr>
						<tr>
							<td>Keadaan Barang akhir</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['keadaan_brg_akhir'].'</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$datainventarisbpd['keterangan'].'</td>
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