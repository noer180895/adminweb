			<div class="span9">
				<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Data User </h3>
							</div>
							<?php
								if($_SESSION['level'] == 1){

							?>
								<a href="<?php echo base_url()?>user/c_23_userTambah">
									<button class="btn btn-success" style="margin-left:10px">Tambah Data</button>
								</a>	
							<?php
								}else{

								}
							?>


							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" style="width:100% !important">
                                    <thead>
                                        <tr>
                                            <th>Nip</th>
                                            <th>E-mail</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Aksi </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody >
                                             <?php
                                                foreach ($tampil as $row) {    
                                                $lvl = $row->level;
                                                if ($lvl == "1") {
                                            		$lvl ="Super Admin";
                                            	}else{
                                            		$lvl ="Admin";
                                            	}    
                                                echo "
                                                    <tr>
                                                        <td>".$row->nip."</td>
                                                        <td>".$row->email."</td>
                                                        <td>".$lvl."</td>
                                                        <td>".$row->status."</td>
                                                     <td>";
															if($_SESSION['level']==2){
															
															?>
																<a href="<?php echo base_url()?>user/c_23_user/lihat?id=<?php echo $row->nip?>"><button style='' class='btn btn-primary'>lihat</button></a>
															<?php

																}else{
															?>
															<a href="<?php echo base_url()?>user/c_23_user/lihat?id=<?php echo $row->nip?>"><button style='margin-bottom:5px;width:100%' class='btn btn-info'>lihat</button></a>
															<a href="<?php echo base_url()?>user/c_23_user/ubah?id=<?php echo $row->nip?>"><button style='margin-bottom:5px;width:100%' class='btn btn-primary'>ubah</button></a>
															<a href="<?php echo base_url()?>user/c_23_user/hapus?id=<?php echo $row->nip?>"><button onclick="return hapus()" style='margin-bottom:5px;width:100%' class='btn btn-danger'>hapus</button></a>
															<?php
															}
															?>
														</td>
													</tr>	
														<?php
												}	
												?>
                                         
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nip</th>
                                            <th>E-mail</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Aksi </th>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
							</div>
						</div><!--/.module-->
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
  function hapus () {
    return confirm("Anda yakin akan menghapus data ?");
  }
  function ubah () {
    return confirm("Anda yakin akan mengubah data ?");
  }
  function simpan () {
    return confirm("Anda yakin akan menyimpan data ?");
  }
</script>