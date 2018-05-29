

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Register Jual Beli Tanah</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/pdfbukuregisterjualbelitanah" class="tombolexport">Export PDF</a>
                                            <?php
                                        }else{

                                        }
                                        ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                                <th id="tengah" rowspan="2">Nomor</th>
                                                <th id="tengah" rowspan="2">Aksi</th>
                                                <th id="tengah" rowspan="2">Tanggal No Surat Perjanjian (AKTA) / Sertifikat</th>
                                                <th id="tengah" colspan="2">Penjual</th>
                                                <th id="tengah" colspan="2">Pembeli</th>
                                                <th id="tengah" colspan="2">Tanah yang Dijual</th>
                                                <th id="tengah" rowspan="2">Jenis Tanah</th>
                                                <th id="tengah" rowspan="2">Luas Tanah</th>
                                                <th id="tengah" rowspan="2">Batas Tanah</th>
                                                <th id="tengah" rowspan="2">Harga (Rp)</th>
                                                <th id="tengah" rowspan="2">Syarat Lain</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">No Kitir / Gitir</th>
                                                <th id="tengah">No Persil</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                    <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_surat_perjanjian)." / ".$row->nomor_surat_perjanjian."</td>
                                                        <td id='tengah'>".$row->nama_penjual."</td>
                                                        <td id='tengah'>".$row->alamat_penjual."</td>
                                                        <td id='tengah'>".$row->nama_pembeli."</td>
                                                        <td id='tengah'>".$row->alamat_pembeli."</td>
                                                        <td id='tengah'>".$row->nomor_kitir_girik_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_persil_tanah."</td>
                                                        <td id='tengah'>".$row->jenis_tanah."</td>
                                                        <td id='tengah'>".$row->luas_tanah."</td>
                                                        <td id='tengah'>".$row->batas_tanah."</td>
                                                        <td id='tengah'>".$row->harga."</td>
                                                        <td id='tengah'>".$row->syarat_lain."</td>
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