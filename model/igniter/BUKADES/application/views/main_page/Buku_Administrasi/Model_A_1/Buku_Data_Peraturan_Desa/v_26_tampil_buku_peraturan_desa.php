<style type="text/css">
 .font{
    font-size: 18px;
    text-transform: uppercase;
 }
 .tengah{
            text-align: center;
            font-size: 15px;
            padding: 5px;
        }
 </style>  
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h4>Daftar Buku Peraturan Desa</h4></center>
                            </div>
                            <div class="module-body">
                                <table width="100%" border="0">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/tambah" class="tombolsimpanubah">Tambah Data</a>
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level'] == 1){

                                            ?>
                                                <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/pdfbukuperaturandesa" class="tombolexport">Export PDF</a>
                                            <?php
                                                }else{

                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                    
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th style="vertical-align: middle;text-align: center;">No</th>
                                                <th style="vertical-align: middle;text-align: center;">Aksi</th>
                                                <th style="vertical-align: middle;text-align: center;">Nomor & Tanggal Peraturan Desa</th>
                                                <th style="vertical-align: middle;text-align: center;">Tentang</th>
                                                <th style="vertical-align: middle;text-align: center;">Uraian Singkat</th>
                                                <th style="vertical-align: middle;text-align: center;">Nomor & Tanggal Persetujuan BPD</th>
                                                <th style="vertical-align: middle;text-align: center;">Nomor & Tanggal Dilaporkan</th>
                                                <th style="vertical-align: middle;text-align: center;">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                    foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        ?>
                                                        <td style='vertical-align:middle'><?php echo $a?></td>
                                                        <td>
                                                        <?php
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus' id="hapus">Hapus</button></a>
                                                        </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td style='vertical-align:middle'>".$row->nomor_peraturan_desa." / ".TanggalIndo($row->tanggal_peraturan_desa)."</td>
                                                        <td style='vertical-align:middle'>".$row->tentang."</td>
                                                        <td style='vertical-align:middle'>".$row->uraian_singkat."</td>
                                                        <td style='vertical-align:middle'>".$row->nomor_persetujuan_BPD." / ".TanggalIndodua($row->tanggal_persetujuan_BPD)."</td>
                                                        <td style='vertical-align:middle'>".$row->nomor_dilaporkan." / ".TanggalIndodua($row->tanggal_dilaporkan)."</td>
                                                        <td style='vertical-align:middle'>".$row->keterangan."</td>
                                                        ";
                                                        ?>
                                                        <?php
                                                            }
                                                        ?>
                                                        
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