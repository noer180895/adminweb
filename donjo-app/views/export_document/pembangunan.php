<?php
		$title = 'rencana-pembangunan-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form rencana pembangunan');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form rencana pembangunan</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$pembangunan['nama'].'</td>
						</tr>
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$pembangunan['no_urut'].'</td>
						</tr>
						<tr>
							<td>Kegiatan</td>
							<td>:</td>
							<td align="left">'.$pembangunan['kegiatan'].'</td>
						</tr>
						<tr>
							<td>Volume</td>
							<td>:</td>
							<td align="left">'.$pembangunan['volume'].'</td>
						</tr>
						<tr>
							<td>Sumber Daya Pemerintah</td>
							<td>:</td>
							<td align="left">'.$pembangunan['sumber_daya_pemerintah'].'</td>
						</tr>

								<tr>
							<td>Sumber Daya Provinsi</td>
							<td>:</td>
							<td align="left">'.$pembangunan['sumber_daya_provinsi'].'</td>
						</tr>


									<tr>
							<td>Sumber Daya Kab/Kota</td>
							<td>:</td>
							<td align="left">'.$pembangunan['sumber_daya_kota'].'</td>
						</tr>

										<tr>
							<td>Sumber Daya Swadaya</td>
							<td>:</td>
							<td align="left">'.$pembangunan['sumber_daya_swadaya'].'</td>
						</tr>

						<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td align="left">'.$pembangunan['jumlah'].'</td>
						</tr>


						<tr>
							<td>Waktu</td>
							<td>:</td>
							<td align="left">'.$pembangunan['waktu'].'</td>
						</tr>


						<tr>
							<td>Sifat Proyek</td>
							<td>:</td>
							<td align="left">'.$pembangunan['type'].'</td>
						</tr>



						<tr>
							<td>Pelaksanaan	</td>
							<td>:</td>
							<td align="left">'.$pembangunan['pelaksanaan'].'</td>
						</tr>



						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td align="left">'.$pembangunan['keterangan'].'</td>
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