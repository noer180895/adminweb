

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Register Nikah Talak Cerai Rujuk</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/pdfbukuregisternikahtalakcerairujuk" class="tombolexport">Export PDF</a>
                                            <?php
                                                }else{

                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                                <th id="tengah" >Tanggal</th>
                                                <th id="tengah" colspan="6">Suami</th>
                                                <th id="tengah" colspan="6">Istri</th>
                                                <th id="tengah" rowspan="2">Wali</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Menikah Talak Cerai Rujuk</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">Nomor KTP</th>
                                                <th id="tengah">Status</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pekerjaan</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">Nomor KTP</th>
                                                <th id="tengah">Status</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pekerjaan</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                    <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_register)."</td>
                                                        <td id='tengah'>".$row->nama_suami."</td>
                                                        <td id='tengah'>".$row->alamat_suami."</td>
                                                        <td id='tengah'>".$row->no_ktp_suami."</td>
                                                        <td id='tengah'>".$row->status_suami."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_lahir_suami)."</td>
                                                        <td id='tengah'>".$row->pekerjaan_suami."</td>
                                                        <td id='tengah'>".$row->nama_istri."</td>
                                                        <td id='tengah'>".$row->alamat_istri."</td>
                                                        <td id='tengah'>".$row->no_ktp_istri."</td>
                                                        <td id='tengah'>".$row->status_istri."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_lahir_istri)."</td>
                                                        <td id='tengah'>".$row->pekerjaan_istri."</td>
                                                        <td id='tengah'>".$row->wali."</td>
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