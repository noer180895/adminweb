<?php
		$title = 'bukutamu-desa-data-' . date('ymd') . '.pdf';
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Data Input Form bukutamu');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('sid');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h1>Data Input Form bukutamu</h1>
					<table cellspacing="1" cellpadding="2">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td align="left">'.$bukutamu['nama'].'</td>
						</tr>
						<tr>
							<td>Uraian</td>
							<td>:</td>
							<td align="left">'.$bukutamu['uraian'].'</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td align="left">'.$bukutamu['tanggal'].'</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td align="left">'.$bukutamu['nama_lengkap'].'</td>
						</tr>
			



						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td align="left">'.$bukutamu['jabatan'].'</td>
						</tr>



						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td align="left">'.$bukutamu['alamat'].'</td>
						</tr>



						<tr>
							<td>Keperluan
</td>
							<td>:</td>
							<td align="left">'.$bukutamu['keperluan'].'</td>
						</tr>


						<tr>
							<td>Tanda Tangan
</td>
							<td>:</td>
							<td align="left">'.$bukutamu['ttd'].'</td>
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