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
                                            <p class="font"><b>ADMINISTRASI KEPENDUDUKAN DESA</b></p>
                                            <p class="font"><b>Model B. 3 : Buku Rekapitulasi Penduduk Akhir Bulan</b></p>
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
                                            	<th id="tengah" rowspan="2">Dusun / Lingkungan</th>
                                                <th id="tengah" rowspan="2">Jumlah KK Awal Bulan</th>
                                                <th id="tengah" colspan="2">WNA awal bulan</th>
                                                <th id="tengah" colspan="2">WNI awal bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Anggota KK awal bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Penduduk awal bulan</th>
                                                <th id="tengah" colspan="2">Penambahan WNA yang Lahir</th>
                                                <th id="tengah" colspan="2">Penambahan WNI yang Lahir</th>
                                                <th id="tengah" colspan="2">Penambahan WNA karena Pindah</th>
                                                <th id="tengah" colspan="2">Penambahan WNI karena Pindah</th>
                                                <th id="tengah" colspan="2">Pengurangan WNA karena Kematian</th>
                                                <th id="tengah" colspan="2">Pengurangan WNI karena Kematian</th>
                                                <th id="tengah" colspan="2">Pengurangan WNA karena Pindah</th>
                                                <th id="tengah" colspan="2">Pengurangan WNI karena Pindah</th>
                                                <th id="tengah" colspan="2">Jumlah Penduduk WNA akhir bulan</th>
                                                <th id="tengah" colspan="2">Jumlah Penduduk WNI akhir bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah KK akhir bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Anggota Keluarga akhir bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Penduduk Akhir Bulan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
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
                                                        <td id='tengah'>".$row->dusun."</td>
                                                        <td id='tengah'>".$row->jumlah_kk_awal_bulan."</td>
                                                        <td id='tengah'>".$row->wna_awal_laki_laki."</td>
                                                        <td id='tengah'>".$row->wna_awal_perempuan."</td>
                                                        <td id='tengah'>".$row->wni_awal_laki_laki."</td>
                                                        <td id='tengah'>".$row->wni_awal_perempuan."</td>
                                                        <td id='tengah'>".$row->jumlah_anggota_kk_awal_bulan."</td>
                                                        <td id='tengah'>".$row->jumlah_penduduk_awal_bulan."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_lahir_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_lahir_perempuan."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_lahir_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_lahir_perempuan."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_kematian_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_kematian_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_kematian_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_kematian_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->wna_akhir_laki_laki."</td>
                                                        <td id='tengah'>".$row->wna_akhir_perempuan."</td>
                                                        <td id='tengah'>".$row->wni_akhir_laki_laki."</td>
                                                        <td id='tengah'>".$row->wni_akhir_perempuan."</td>
                                                        <td id='tengah'>".$row->jumlah_kk_akhir_bulan."</td>
                                                        <td id='tengah'>".$row->jumlah_anggota_keluarga_akhir_bulan."</td>
                                                        <td id='tengah'>".$row->jumlah_penduduk_akhir."</td>
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