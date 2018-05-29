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
                                            <p class="font"><b>Model A. 5 : Buku Tanah Kas Milik Desa</b></p>
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
                                <div style="height: 410px;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="3">No</th>
                                                <th id="tengah" rowspan="3">Asal Tanah Milik Desa / Tanah Kas Desa</th>
                                                <th id="tengah" rowspan="3">Nomor Sertifikat Buku Letter C / Persil</th>
                                                <th id="tengah" rowspan="3">Luas (Ha)</th>
                                                <th id="tengah" rowspan="3">Klas</th>
                                                <th id="tengah" colspan="6">Perolehan Tanah Kas Desa</th>
                                                <th id="tengah" colspan="5">Jenis Tanah Kas Desa</th>
                                                <th id="tengah" colspan="2">Patok Tanda Batas</th>
                                                <th id="tengah" colspan="2">Papan Nama</th>
                                                <th id="tengah" rowspan="3">Lokasi</th>
                                                <th id="tengah" rowspan="3">Peruntukan</th>
                                                <th id="tengah" rowspan="3">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah" rowspan="2">Asli Milik Desa</th>
                                            	<th id="tengah" colspan="3">Bantuan</th>
                                            	<th id="tengah" rowspan="2">lain-Lain</th>
                                            	<th id="tengah" rowspan="2">Tanggal Perolehan</th>
                                            	<th id="tengah" rowspan="2">Sawah</th>
                                            	<th id="tengah" rowspan="2">Tegal</th>
                                            	<th id="tengah" rowspan="2">Kebun</th>
                                            	<th id="tengah" rowspan="2">Tambak / Kolam</th>
                                            	<th id="tengah" rowspan="2">tanah Kering / Daratan</th>
                                            	<th id="tengah" rowspan="2">Ada</th>
                                            	<th id="tengah" rowspan="2">Tidak ada</th>
                                            	<th id="tengah" rowspan="2">Ada</th>
                                            	<th id="tengah" rowspan="2">Tidak Ada</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Pusat</th>
                                            	<th id="tengah">Provinsi</th>
                                            	<th id="tengah">Kabupaten/Kota</th>
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
                                                        <td id='tengah'>".$row->asal_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_sertifikat."</td>
                                                        <td id='tengah'>".$row->luas."</td>
                                                        <td id='tengah'>".$row->klas."</td>
                                                        <td id='tengah'>".$row->asli_milik_desa."</td>
                                                        <td id='tengah'>".$row->pusat."</td>
                                                        <td id='tengah'>".$row->provinsi."</td>
                                                        <td id='tengah'>".$row->kabupaten."</td>
                                                        <td id='tengah'>".$row->lain_lain."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_perolehan)."</td>
                                                        <td id='tengah'>".$row->sawah."</td>
                                                        <td id='tengah'>".$row->tegal."</td>
                                                        <td id='tengah'>".$row->kebun."</td>
                                                        <td id='tengah'>".$row->tambak_kolam."</td>
                                                        <td id='tengah'>".$row->tanah_kering_daratan."</td>
                                                        <td id='tengah'>".$row->patok_ada."</td>
                                                        <td id='tengah'>".$row->patok_tidak_ada."</td>
                                                        <td id='tengah'>".$row->papan_ada."</td>
                                                        <td id='tengah'>".$row->papan_tidak_ada."</td>
                                                        <td id='tengah'>".$row->lokasi."</td>
                                                        <td id='tengah'>".$row->peruntukan."</td>
                                                        <td id='tengah'>".$row->ket."</td>
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