<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>APBDes TAHUN <?php echo $_SESSION['tahunApbdes'] ?></h3>
                <div style="margin: 1% 0 0 0">
                	<a class="btn btn-default" href="<?php echo base_url()?>APBDes/c_23_generateAPBDes/pdf">Export PDF</a>
                </div>
            </div>
            <div style="margin-top: 2%">
	            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
				    <thead>
				        <tr>
				            <th style="text-align:center" colspan="4">Kode Rekening</th>
				            <th style="text-align:center" >Uraian</th>
				            <th style="text-align:center" >Input</th>
				        </tr>
				    </thead>
				    <tbody width="100%">
				                <?php
				                $R = 1;
				                 foreach ($ambilRekening as $row) {
				                    $jumlahAnggaran = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningTahunan($row->k1);
				                    $angkaPertama = substr($row->nomor_rekening, 0, 1);
				                    $angkaKedua = substr($row->nomor_rekening, 0, 3);
				                    // var_dump($jumlahAnggaran[0]->anggaran);
				                    // exit();
				                    echo 
				                        "
				                        <tr>
				                            <td>".$row->k1."</td>
				                            <td>".$row->k2."</td>
				                            <td>".$row->k3."</td>
				                            <td>".$row->k4."</td>
				                            <td>".$row->uraian."</td>";

				                            // kondisi kapan textbox anggaran harus muncul
				                            if ($row->k3 != 0 && $row->k1 != 2) {
				                                if ($row->anggaran != 0 ) {
				                                    ?>
				                                        <td> 
				                                           <?php echo $row->anggaran ?>
				                                        </td>
				                                      <?php  
				                                }else{
				                                    ?>
				                                        <td> 
				                                        	<?php echo $row->anggaran ?>
				                                        </td>
				                                      <?php  
				                                }// tutup else $row->anggaran != 0
				                            }else{
				                                $jumlahAnggaranAngkaPertama = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningTahunan($angkaPertama);
				                                $jumlahAnggaranAngkaKedua = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningTahunan($angkaKedua);
				                                
				                                    ?>
				                                    <td>
				                                        <p id="jumlah">
				                                            <?php
				                                                echo $jumlahAnggaranAngkaKedua[0]->anggaran;
				                                            ?>
				                                        </p>
				                                    </td>
				                                    <?php
				                                
				                            }//tutup else if($row->k3 != 0 && $row->k1 != 2)

				                    // kondisi (true) jika ada itemnya
				                    $lihat = $this->m_23_rekening->ambilDataItemRekeningBerdasarkanTahunApbdes($row->nomor_rekening);
				                    // var_dump($lihat);
				                    $hitung = $this->m_23_rekening->hitungDataItemRekeningBerdasarkan($row->nomor_rekening);
				                    if ($hitung > 0) {
				                        foreach ($lihat as $key ) {
				                            $angkaPertamaPoin2 = substr($row->nomor_rekening, 0, 1);
				                            $angkaKeduaPoin2 = substr($row->nomor_rekening, 0, 3);
				                            echo
				                                "
				                                </tr>
				                                <tr>
				                                    <td></td>
				                                    <td></td>
				                                    <td></td>
				                                    <td>-</td>
				                                    <td>".$key->uraian."</td>";

				                                     // kondisi kapan textbox anggaran harus muncul
				                                if ($key->anggaran != 0 ) {
				                                    ?>
				                                        <td> 
				                                            <?php echo $key->anggaran ?>
				                                        </td>
				                                      <?php  
				                                }else{
				                                    ?>
				                                        <td> 
				                                        	<?php echo $key->anggaran ?>
				                                        </td>
				                                      <?php  
				                                }
				                                $jumlahAnggaranAngkaPertamaPoin2 = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningTahunanPoin2($angkaPertama);
				                                $jumlahAnggaranAngkaKeduaPoin2 = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningTahunanPoin2($angkaKedua);
				                                if ($angkaKedua == 0) {
				                                    ?>
				                                    <td>
				                                        <p id="jumlahPoin2">
				                                            <?php
				                                                echo $jumlahAnggaranAngkaPertamaPoin2[0]->anggaran;
				                                            ?>
				                                        </p>
				                                    </td>
				                                    <?php
				                                }else{
				                                }// tutup elsenya if $angkaKedua == 0
				                        }// foreach key
				                    }// if hitung >0
				                    echo 
				                        "
				                        </td>
				                        </tr>";                    
				                    $R++;
				                }   
				                ?>                                          
				    </tbody>
				    <tfoot>
				        <tr>
				            <th style="text-align:center" colspan="4">Kode Rekening</th>
				            <th style="text-align:center" >Uraian</th>
				            <th style="text-align:center" >Input</th>
				        </tr>
				    </tfoot>
				</table>
			</div>
		</div>
	</div><!--/.content-->
</div><!--/.span9-->
