
                 <style type="text/css">
                 .font{
                    font-size: 18px;
                    text-transform: uppercase;
                 }
                 .tengah{
                            text-align: center;
                            font-size: 13px;
                            padding: 5px;
                        }
                 </style>          
                <div class="span9">
                    <div class="content">
                        <div style="border-bottom: solid;">
                            
                            <table width="100%">
                            <tr>
                            <td>
                                <center>
                                    <p class="font"><b>ADMINISTRASI UMUM DESA</b></p>
                                    <p class="font"><b>Model A. 1 : Buku Peraturan Desa</b></p>
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
                        </div><br><br>
                                <div class="module-body table">
                                <center>
                                    <table cellpadding="0" cellspacing="0" border="1"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th class="tengah">No</th>
                                                <th class="tengah">Nomor & Tanggal Peraturan Desa</th>
                                                <th class="tengah">Tentang</th>
                                                <th class="tengah">Uraian Singkat</th>
                                                <th class="tengah">Nomor & Tanggal Persetujuan BPD</th>
                                                <th class="tengah">Nomor & Tanggal Dilaporkan</th>
                                                <th class="tengah">Keterangan</th>
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
                                                        <td class='tengah'>".$a."</td>
                                                        <td class='tengah'>".$row->nomor_peraturan_desa." / ".TanggalIndo($row->tanggal_peraturan_desa)."</td>
                                                        <td class='tengah'>".$row->tentang."</td>
                                                        <td class='tengah'>".$row->uraian_singkat."</td>
                                                        <td class='tengah'>".$row->nomor_persetujuan_BPD." / ".TanggalIndodua($row->tanggal_persetujuan_BPD)."</td>
                                                        <td class='tengah'>".$row->nomor_dilaporkan." / ".TanggalIndodua($row->tanggal_dilaporkan)."</td>
                                                        <td class='tengah'>".$row->keterangan."</td>";
                                                        ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                        </table>
                                    </center>
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