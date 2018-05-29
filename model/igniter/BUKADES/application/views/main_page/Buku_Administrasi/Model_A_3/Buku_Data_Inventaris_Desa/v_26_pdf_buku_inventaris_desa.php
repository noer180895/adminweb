                <style type="text/css">
                 .font{
                    font-size: 18px;
                    text-transform: uppercase;
                 }
                 #tengah{
                            text-align: center;
                            font-size: 13px;
                            padding: 5px;
                        }
                 </style> 
                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <div style="border-bottom: solid;">
                                    <table width="100%" border="0">
                                    <tr>
                                    <td>
                                        <center>
                                            <p class="font"><b>ADMINISTRASI UMUM DESA</b></p>
                                            <p class="font"><b>Model A. 3 : Buku Inventaris Desa</b></p>
                                            <p class="font"><b>Tahun <?php echo date('Y')?></b></p>
                                        </center>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                                <br>
                                    <table cellpadding="0" cellspacing="0" border="1"
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
                                        
                                                <?php
                                                $a=0;
                                                foreach ($ambildata as $row) {
                                                        $a++;
                                                        ?>
                                                        <tr>
                                                        <?php
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
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_penghapusan)."</td>
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
                                          <?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                             
                                    ?>
                                         <table width="100%">
                                            <tr>
                                                <td width="50%" style="text-align: right;">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $rowperangkat->nama_kabupaten ?>, 
                                                                <?php
                                                                   echo TanggalIndo(date("d-m-Y"));
                                                                ?>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="fontbawah" style="text-transform: capitalize;">Kepala Desa <?php echo $rowperangkat->nama_desa;?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $rowperangkat->nama_kepala_desa."<br>NIP. ".$rowpenanda->nip_kades;
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
                                }
                                ?>  
                                    </div>

                            </div>
                            </div>
                            
                        </div>
                </div>
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