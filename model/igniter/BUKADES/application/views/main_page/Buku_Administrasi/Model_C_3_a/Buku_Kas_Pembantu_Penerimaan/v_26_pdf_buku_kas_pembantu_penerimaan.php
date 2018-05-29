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
                                            <p class="font"><b>ADMINISTRASI Keuangan DESA</b></p>
                                            <p style="font-size: 18px"><b>MODEL C. 3. a : BUKU KAS PEMBANTU PERINCIAN OBYEK PENERIMAAN</b></p>
                                            <p class="font"><b>Desa <?php echo $ambilperangkatdesa[0]->nama_desa?> Kecamatan <?php echo $ambilperangkatdesa[0]->nama_kecamatan?></b></p>
                                            <p class="font"><b>Tahun Anggaran <?php echo date('Y')?></b></p>
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
                                            	<th id="tengah">No</th>
                                            	<th id="tengah">Nomor BKU Penerimaan</th>
                                            	<th id="tengah">Tanggal Setor</th>
                                                <th id="tengah">Nomor STS & Bukti Penerimaan Lainnya</th>
                                                <th id="tengah">Jumlah (Rp)</th>
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
                                                                    <td id='tengah'>".$row->nomor_bku_penerimaan."</td>
                                                                    <td id='tengah'>".TanggalIndodua($row->tanggal_setor)."</td>
                                                                    <td id='tengah'>".$row->nomor_sts."</td>
                                                                    <td id='tengah'>".$row->jumlah."</td>
                                                                    ";
                                                                ?>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                    ?>
                                        </tbody>
                                        <tfoot>
                                            <?php
                                                $jumlah = $this->m_26_buku_kas_pembantu_penerimaan->jumlah('jumlah');
                                        ?>
                                        <tr>
                                            <th colspan="3" style="text-align: right;">Jumlah</th>
                                            <th style="text-align: center;"><?php echo $hitungnomorsts?></th>
                                            <th style="text-align: center"><?php echo $jumlah[0]->jumlah?></th>
                                        </tr>   
                                            <tr>
                                                <td colspan="4">
                                                    <p class="pading">Jumlah bulan ini</p>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo $jumlahBulanIni ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <p class="pading">Jumlah s/d bulan lalu</p>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo $jumlahBulanLalu ?> </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <p class="pading">Jumlah s/d bulan ini</p>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo $jumlahSemuaBulan ?> </p>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        </table>
                                    <?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                             
                                    ?>
                                        <table width="100%">
                                            <tr>
                                                <td width="50%">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <p class="fontbawah">Mengetahui</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="fontbawah">Kepala Desa</p></td>
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
                                                            <td><p class="fontbawah">Bendahara Desa</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $rowperangkat->nama_bendahara_desa."<br>NIP. ".$rowpenanda->nip_bendes;
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
                            </div>
<script type="text/javascript">
    function konfirmasihapus () {
         return confirm('Apakah Anda Akan Menghapus Data ?');
    }
</script>
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