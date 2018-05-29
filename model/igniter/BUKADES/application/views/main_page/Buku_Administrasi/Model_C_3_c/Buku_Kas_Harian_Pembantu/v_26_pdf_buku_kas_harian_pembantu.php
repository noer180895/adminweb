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
                                            <p style="font-size: 18px"><b>MODEL C. 3. c : BUKU KAS HARIAN PEMBANTU</b></p>
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
                                            	<th id="tengah">Tanggal</th>
                                            	<th id="tengah">Uraian</th>
                                                <th id="tengah">Penerimaan (Rp)</th>
                                                <th id="tengah">Pengeluaran (Rp)</th>
                                                <th id="tengah">Jumlah</th>
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
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal)."</td>
                                                        <td id='tengah'>".$row->uraian."</td>
                                                        <td id='tengah'>".$row->penerimaan."</td>
                                                        <td id='tengah'>".$row->pengeluaran."</td>
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
                                                        $jumlahpenerimaan = $this->m_26_buku_kas_harian_pembantu->jumlah('penerimaan');
                                                        $jumlahpengeluaran = $this->m_26_buku_kas_harian_pembantu->jumlah('pengeluaran');
                                                        $jumlah = $this->m_26_buku_kas_harian_pembantu->jumlah('jumlah');
                                                    ?>
                                                <tr>
                                                    <th style="text-align: right;vertical-align: middle;" colspan="3">Jumlah</th>
                                                    <th id="tengah"><?php echo $jumlahpenerimaan[0]->penerimaan?></th>
                                                    <th id="tengah"><?php echo $jumlahpengeluaran[0]->pengeluaran?></th>
                                                    <th id="tengah"><?php echo $jumlah[0]->jumlah?></th>
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
                                
                                        </table>
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