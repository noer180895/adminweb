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
                                            <p class="font"><b>Model A. 6 : Buku Tanah Di Desa</b></p>
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
                                <div style="height: 410px;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="3">No</th>
                                                <th id="tengah" rowspan="3">Nama Perorangan / Badan Hukum</th>
                                                <th id="tengah" rowspan="3">Jumlah (m2)</th>
                                                <th id="tengah" colspan="8">Status Hak Atas Tanah (m2)</th>
                                                <th id="tengah" colspan="12">Penggunaan Tanah (m2)</th>
                                                <th id="tengah" rowspan="3">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah" colspan="5">Sudah Bersertifikat</th>
                                            	<th id="tengah" colspan="3">Belum Bersertifikat</th>
                                            	<th id="tengah" colspan="5">Non Pertanian</th>
                                            	<th id="tengah" colspan="7">Pertanian</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Hak Milik</th>
                                            	<th id="tengah">Hak Guna Bangunan</th>
                                            	<th id="tengah">Hak Pakai</th>
                                                <th id="tengah">Hak Guna Usaha</th>
                                                <th id="tengah">Hak pengelolaan</th>
                                                <th id="tengah">Hak Milik Adat</th>
                                                <th id="tengah">Verponding Indonesie (VI)</th>
                                                <th id="tengah">Tanah Negara</th>
                                                <th id="tengah">Perumahan</th>
                                                <th id="tengah">Perdagangan & Jasa</th>
                                                <th id="tengah">Perantoran</th>
                                                <th id="tengah">Industri</th>
                                                <th id="tengah">Fasilitas Umum</th>
                                                <th id="tengah">Sawah</th>
                                                <th id="tengah">Tegalan</th>
                                                <th id="tengah">Perkebunan</th>
                                                <th id="tengah">Peternakan/Perikanan</th>
                                                <th id="tengah">Hutan Belukar</th>
                                                <th id="tengah">Hutan Lebat / Lindung</th>
                                                <th id="tengah">Tanah Kosong</th>
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
                                                        <td id='tengah'>".$row->nama_perorangan."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td id='tengah'>".$row->hak_milik."</td>
                                                        <td id='tengah'>".$row->hak_guna_bangunan."</td>
                                                        <td id='tengah'>".$row->hak_pakai."</td>
                                                        <td id='tengah'>".$row->Hak_guna_usaha."</td>
                                                        <td id='tengah'>".$row->hak_pengelolaan."</td>
                                                        <td id='tengah'>".$row->hak_milik_adat."</td>
                                                        <td id='tengah'>".$row->verponding_indonesie."</td>
                                                        <td id='tengah'>".$row->tanah_negara."</td>
                                                        <td id='tengah'>".$row->perumahan."</td>
                                                        <td id='tengah'>".$row->perdagangan_jasa."</td>
                                                        <td id='tengah'>".$row->perkantoran."</td>
                                                        <td id='tengah'>".$row->industri."</td>
                                                        <td id='tengah'>".$row->fasilitas_umum."</td>
                                                        <td id='tengah'>".$row->sawah."</td>
                                                        <td id='tengah'>".$row->tegalan."</td>
                                                        <td id='tengah'>".$row->perkebunan."</td>
                                                        <td id='tengah'>".$row->peternakan_perikanan."</td>
                                                        <td id='tengah'>".$row->hutan_belukar."</td>
                                                        <td id='tengah'>".$row->hutan_lebat_lindung."</td>
                                                        <td id='tengah'>".$row->tanah_kosong."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        ";
                                                    }
                                                ?>
                                                    </tr>
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