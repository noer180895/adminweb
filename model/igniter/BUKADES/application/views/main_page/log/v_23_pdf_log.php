<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="1" >
		<thead>
			<tr>
				<th>NIP</th>
				<th>Log</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody width="100%">
				
					<?php
					 foreach ($ambil as $row) {
						echo 
							"
							<tr>
								<td>".$row->nip."</td>
								<td>".$row->aksi."</td>
								<td>".$row->waktu."</td>
							</tr>";
					}	
					?>											
		</tbody>
		<tfoot>
			<tr>
				<th>NIP</th>
				<th>Log</th>
				<th>Tanggal</th>
			</tr>
		</tfoot>
	</table>
</div>