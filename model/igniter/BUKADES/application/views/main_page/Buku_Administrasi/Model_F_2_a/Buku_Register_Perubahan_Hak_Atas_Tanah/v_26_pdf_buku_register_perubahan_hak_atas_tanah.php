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
                .pading{
                    padding-left: 20px;   
                }
                .fontbawah{
                    text-transform: uppercase;
                    font-size: 14px;
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
                                            <p style="font-size: 18px"><b>MODEL F. 2. a : BUKU REGISTER PERUBAHAN HAK ATAS TANAH</b></p>
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
                                </div><br>
                                <div style="height: 410px; overflow: scroll;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="2">No</th>
                                                <th id="tengah" rowspan="2">Tanggal Perubahan</th>
                                                <th id="tengah" colspan="3">Perubahan Hak Atas Tanah</th>
                                                <th id="tengah" colspan="5">Data Tanah yang Berubah</th>
                                                <th id="tengah" rowspan="2">Tanggal & No Akte Perubahan Hak</th>
                                                <th id="tengah" rowspan="2">Proses Perubahan Hak</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Yang Melepaskan Hak</th>
                                                <th id="tengah">Yang Menerima Hak</th>
                                                <th id="tengah">Jenis dan Kelas</th>
                                                <th id="tengah">No Persil</th>
                                                <th id="tengah">Letak Blok</th>
                                                <th id="tengah">Luas Tanah</th>
                                                <th id="tengah">Batas Keliling</th>
                                                <th id="tengah">Harga (Rp)</th>
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
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_perubahan)."</td>
                                                        <td id='tengah'>".$row->melepaskan_perubahan_hak_tanah."</td>
                                                        <td id='tengah'>".$row->menerima_perubahan_hak_tanah."</td>
                                                        <td id='tengah'>".$row->jenis_kelas_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_persil."</td>
                                                        <td id='tengah'>".$row->letak_blok."</td>
                                                        <td id='tengah'>".$row->luas_tanah."</td>
                                                        <td id='tengah'>".$row->batas_keliling."</td>
                                                        <td id='tengah'>".$row->harga."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_akte_perubahan)." / ".$row->nomor_akte_perubahan."</td>
                                                        <td id='tengah'>".$row->proses_perubahan_hak."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                       ";
                                                        ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                                <tfoot>
                                                    
                                                </tfoot>
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