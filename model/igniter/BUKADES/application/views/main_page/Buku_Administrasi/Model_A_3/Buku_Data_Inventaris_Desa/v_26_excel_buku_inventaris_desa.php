<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Inventaris Desa.xls");
?>
                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="14">
                                        
                                        <center><h3>Daftar Buku Inventaris Desa Tahun <?php echo date('Y')?></h3></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="14">
                                        <p>Model A 3</p>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            <div class="module-body">
                            
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th rowspan="2" id="tengah">No</th>
                                                <th rowspan="2" id="tengah">Jenis Barang Bangunan</th>
                                                <th colspan="3" id="tengah">Asal Barang</th>
                                                <th colspan="2" id="tengah">Keadaan Barang Awal Tahun</th>
                                                <th colspan="3" id="tengah">Penghapusan</th>
                                                <th rowspan="2" id="tengah">Tanggal Penghapusan</th>
                                                <th colspan="2" id="tengah">Keadaan Barang Akhir Tahun</th>
                                                <th rowspan="2" id="tengah">Ket</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Dibeli sendiri</th>
                                                <th id="tengah">Bantuan Pemerintah</th>
                                                <th id="tengah">Sumbangan</th>
                                                <th id="tengah">Baik</th>
                                                <th id="tengah">Rusak</th>
                                                <th id="tengah">Rusak</th>
                                                <th id="tengah">Dijual</th>
                                                <th id="tengah">Disumbangkan</th>
                                                <th id="tengah">Baik</th>
                                                <th id="tengah">Rusak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$a."</td>
                                                        <td id='tengah'>".$row->jenis_barang_bangunan."</td>
                                                        <td id='tengah'>".$row->asal_dibeli_sendiri."</td>
                                                        <td id='tengah'>".$row->asal_bantuan_pemerintah."</td>
                                                        <td id='tengah'>".$row->asal_sumbangan."</td>
                                                        <td id='tengah'>".$row->keadaan_baik."</td>
                                                        <td id='tengah'>".$row->keadaan_rusak."</td>
                                                        <td id='tengah'>".$row->penghapusan_rusak."</td>
                                                        <td id='tengah'>".$row->penghapusan_dijual."</td>
                                                        <td id='tengah'>".$row->penghapusan_disumbangkan."</td>
                                                        <td id='tengah'>".$row->tanggal_penghapusan."</td>
                                                        <td id='tengah'>".$row->keadaan_akhir_tahun_baik."</td>
                                                        <td id='tengah'>".$row->keadaan_akhir_tahun_rusak."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        ";
                                                        ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                        </table>
                                        </div>
                                    </div>

                            </div>
                            </div>
                            
                        </div>
                </div>