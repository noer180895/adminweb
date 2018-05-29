 <head>
     <style type="text/css">
        .tr-kanan th{
            text-align: right;
        }
        .kanan{
            text-align: right;
        }
        .module-head h3{
            text-align: center;
            text-transform: uppercase;
        }
        .module-head{
            border-bottom: 1px solid #000;
            margin-bottom: 1%;
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
                                <h3>
                                	ADMINISTRASI KEUANGAN DESA <br>
                                	MODEL C. 1 : ANGGARAN PENDAPATAN DAN BELANJA DESA<br>
                                	DESA <?php echo $perdes->nama_desa ?> KECAMATAN <?php echo $perdes->nama_kecamatan ?><br>
                                    TAHUN ANGGARAN <?php echo date("Y") ?>
                                </h3>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanBukuBankDesa" method="POST">
                                        <br>
                                    <table border="1" class="datatable-1 table table-bordered table-striped display" style="text-align: center;width: 100%">
                                        <thead>
                                            <tr>
                                                <th colspan="4">Kode Rekening</th>
												<th rowspan="2">Uraian</th>
												<th rowspan="2">Tahun Sebelumnya</th>
												<th rowspan="2">Tahun Berjalan</th>
												<th rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                               <th>K1</th>
												<th>K2</th>
												<th>K3</th>
												<th>K4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- table body -->
										<?php
											foreach ($apbdes as $row ) {
												?>
													<tr>
														<td><?php echo $row->k1 ?></td>
														<td><?php echo $row->k2 ?></td>
														<td><?php echo $row->k3 ?></td>
														<td><?php echo $row->k4 ?></td>
														<td><?php echo $row->uraian ?></td>
														<td><?php echo $row->tahun_sebelumnya ?></td>
														<td><?php echo $row->tahun_berjalan ?></td>
														<td><?php echo $row->keterangan ?></td>
													</tr>
												<?php
											}
										?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                    <?php
                                        foreach ($ambilpenandatangan as $rowpenanda) {
                                         
                                    ?>
                                    <div class="bawah" style="height: 150px">
                                        <table width="100%">
                                            <tr>
                                                <td width="50%">
                                                    <!-- kiri -->
                                                </td>
                                                <td width="50%" style="text-align: right;">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $perdes->nama_kabupaten ?>, 
                                                                <?php
                                                                   echo TanggalIndo(date("d-m-Y"));
                                                                ?>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kepala Desa</td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $perdes->nama_kepala_desa."<br>NIP. ".$rowpenanda->nip_kades;
                                                            ?>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div> <!-- #bawah -->
                                    <?php
                                }
                                ?>
                                </form>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
                <?php
    function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

    function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 3);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>