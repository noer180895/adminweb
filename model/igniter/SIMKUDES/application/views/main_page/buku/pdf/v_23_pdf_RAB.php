<?php
    $rowperangkat = $perdes[0];
?> 
 <head>
     <style type="text/css">
        .tr-kanan th{
            text-align: right;
        }
        .kanan{
            text-align: right;
        }
        .module-head h3{
            padding-top: 3%;
            text-align: center;
            text-transform: uppercase;
            text-decoration: underline;
        }
        .module-head{
            margin-bottom: 5%;
        }
        thead th{
            background-color: #f9f9f9;
        }
        tfoot th{
            background-color: #f9f9f9;
        }
     </style>
 </head>
                 <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <div style="border-bottom: 1px solid #000;">
									<table border="0" width="100%">
									<tr>
										<td rowspan="4" width="100px">
												<img style="margin-top: -10px;" src="<?php echo $rowperangkat->logo_desa;?>" width="80px" height="100px">
										</td>
										<td>
											<h3>
												<center>
												<p style="text-transform: uppercase;">PEMERINTAH KABUPATEN <?php echo $rowperangkat->nama_kabupaten; ?> </p>
												</center>
											</h3>
										</td>
									</tr>
									<tr>
										<td>
											<h3>
												<center>
												<p style="text-transform: uppercase;">KANTOR DESA <?php echo $rowperangkat->nama_desa;?></p>
												</center>
											</h3>
										</td>
									</tr>
									<tr>
										<td>
											<h3>
												<center>
												<p style="text-transform: uppercase;">KECAMATAN <?php echo $rowperangkat->nama_kecamatan;?></p>
												</center>
											</h3>
										</td>
									</tr>
									<tr>
										<td>
											<h4>
												<center>
												<p><?php echo $rowperangkat->alamat_desa;?></p>
												</center>
											</h4>
										</td>
									</tr>
									</table>
								</div>
					            <!-- <h3>
					                Laporan Anggaran Pembangunan dan Belanja Desa <br>
					            </h3> -->
                <h3>
                 	Laporan Rencana Anggaran Belanja 
               	</h3>
            </div>

            <div style="margin-top: 2%">
	            <table border="1" style="width:100%;margin:0 2.5%;font-size: 13.5px">
				    <thead>
				        <tr>
				            <th style="text-align:center" colspan="4">Kode Rekening</th>
				            <th style="text-align:center" >Uraian</th>
				            <th>Volume</th>
				            <th>Harga satuan</th>
				            <th style="text-align:center" >Anggaran</th>
				        </tr>
				    </thead>
				    <tbody width="100%">
				                <?php
				                $R = 1;
				                 foreach ($join as $row) {
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
				                            <td>".$row->uraian."</td>
				                            <td></td>
				                            <td></td>
				                            ";

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
				                                                // echo $jumlahAnggaranAngkaKedua[0]->anggaran;
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
				                                    <td>".$key->uraian."</td>
				                                    <td>".$row->volume."</td>
				                            		<td>".$row->harga_satuan."</td>";

				                                     // kondisi kapan textbox anggaran harus muncul
				                                if ($key->anggaran != 0 ) {
				                                    ?>
				                                        <td  style='text-align:right;'> 
				                                            <?php echo $key->anggaran ?>
				                                        </td>
				                                      <?php  
				                                }else{
				                                    ?>
				                                        <td  style='text-align:right;'> 
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
				        <?php
				        	$dataWhere = array(
								'tahun' => $_SESSION['tahunApbdes'] , 
								);
							$jumlahAnggaran = $this->m_23_RAB->hitungJumlahAnggaran($dataWhere);
				        ?>
				            <th style="text-align:center" colspan="7">Jumlah Anggaran</th>
				            <th style="text-align:right;" ><?php echo $jumlahAnggaran[0]->jumlah ?></th>
				        </tr>
				    </tfoot>
				</table>
			</div>
		</div>
	</div><!--/.content-->
</div><!--/.span9-->

<table style="width: 100%">
	<tr>
		<td width="50%" style="text-align: left;">
			<table style="text-align: center;float: right;padding-top: 2%;font-size: 13px">
				<tr>
					<td>Disetujui Oleh,</td>
				</tr>
				<tr>
					<td>Kepala Desa <span style="text-transform: capitalize;"> <?php echo $_SESSION['namaDesa'] ?> </span></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td style="padding-top: 5%px;text-transform: uppercase;"><?php echo $_SESSION['namaKepalaDesa'] ?></td>
				</tr>
			</table>			
		</td>
		<td width="50%" style="text-align: right;">
			<table style="text-align: center;float: right;padding-top: 2%;font-size: 13px">
				<tr>
					<td style="text-transform: capitalize;"><?php echo $_SESSION['namaDesa'] ?> , <?php echo $row->tanggal?></td>
				</tr>
				<tr>
					<td>Pelaksana Kegiatan</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td style="padding-top: 5%px;text-transform: uppercase;"><?php echo $row->pelaksana_kegiatan?></td>
				</tr>
			</table>
		</td>
	</tr>	
</table>
