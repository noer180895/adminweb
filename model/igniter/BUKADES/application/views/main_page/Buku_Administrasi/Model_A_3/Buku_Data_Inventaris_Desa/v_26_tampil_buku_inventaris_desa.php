
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Inventaris Desa</h3></center>
                            </div>
                            <div class="module-body">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/tambah" class="tombolsimpanubah">Tambah Data</a>
                            
                                    </td>
                                    <td style="text-align: right;">
                                        <?php
                                            if($_SESSION['level']==1){
                                        ?>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/pdfbukuinventarisdesa" class="tombolexport">Export PDF</a>
                                        <?php
                                            }else{

                                            }
                                        ?>            
                                    </td>
                                </tr>
                            </table>
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                            <br>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th rowspan="2" id="tengah">No</th>
                                                <th rowspan="2" id="tengah">Aksi</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        </td>
                                                        <?php
                                                        echo 
                                                        "
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