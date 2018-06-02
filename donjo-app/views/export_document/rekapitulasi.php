<?php
		$title = 'rekapitulasi-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form rekapitulasi');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form rekapitulasi</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>No Urut</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['no_urut'].'</td>
						</tr>
						<tr>
							<td>Nam Dusun</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['nama_dusun'].'</td>
						</tr>
						<tr>
							<td>Laki - Laki (WNA)</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['l_wna'].'</td>
						</tr>
						<tr>
							<td>Perempuan (WNA)	</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['p_wna'].'</td>
						</tr>
						<tr>
							<td>Laki - Laki (WNI)</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['l_wni'].'</td>
						</tr>

								<tr>
							<td>Perempuan (WNI)</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['p_wni'].'</td>
						</tr>


									<tr>
							<td>Jumlah KK</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['jumlah_kk'].'</td>
						</tr>

										<tr>
							<td>Jumlah Anggota Keluarga	</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['jml_anggota_kel'].'</td>
						</tr>

						<tr>
							<td>Jumlah Jiwa	</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['jml_jiwa'].'</td>
						</tr>



						<tr>
							<td>Laki - Laki (WNI) Lahir	</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['l_wni_lahir'].'</td>
						</tr>



						<tr>
							<td>Perempuan (WNI) Lahir	</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['p_wni_lahir'].'</td>
						</tr>



						<tr>
							<td>Laki - Laki (WNA) Datang	

</td>
							<td>:</td>
							<td align="left">'.$rekapitulasi['l_wna_datang	'].'</td>
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