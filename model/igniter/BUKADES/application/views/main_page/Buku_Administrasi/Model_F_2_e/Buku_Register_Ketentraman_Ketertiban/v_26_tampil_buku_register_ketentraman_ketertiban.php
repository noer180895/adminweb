

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Register Ketentraman dan Ketertiban</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/pdfbukuregisterketentramanketertiban" class="tombolexport">Export PDF</a>
                                            <?php
                                        }else{

                                        }
                                        ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style><br>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="3">Nomor</th>
                                                <th id="tengah" rowspan="3">Aksi</th>
                                                <th id="tengah" rowspan="3">Tanggal Kejadian Kejahatan (Kepolisian/Kecelakaan) Bencana Alam Dll</th>
                                                <th id="tengah" rowspan="3">Uraian Singkat Terjadinya Peristiwa</th>
                                                <th id="tengah" colspan="4">Kerugian</th>
                                                <th id="tengah" rowspan="3">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah" colspan="2">Benda</th>
                                                <th id="tengah" rowspan="2">Banyaknya Korban Luka</th>
                                                <th id="tengah" rowspan="2">Banyaknya Korban Jiwa</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Nama Barang</th>
                                                <th id="tengah">Taksiran Harga</th>
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
                                                        <td id='tengah'><?php echo $a?></td>
                                                        <td>
                                                        <?php
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/hapus?id=<?php echo $id?>" onclick=" return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                    <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_kejadian)."</td>
                                                        <td id='tengah'>".$row->uraian_singkat."</td>
                                                        <td id='tengah'>".$row->nama_barang."</td>
                                                        <td id='tengah'>".$row->taksiran_harga."</td>
                                                        <td id='tengah'>".$row->korban_luka."</td>
                                                        <td id='tengah'>".$row->korban_jiwa."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        ";
                                                        ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                                <tfoot>
                                                    
                                                </tfoot>
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