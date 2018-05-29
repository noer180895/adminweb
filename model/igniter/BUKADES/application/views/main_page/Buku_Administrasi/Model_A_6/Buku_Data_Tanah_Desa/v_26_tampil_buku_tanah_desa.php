

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Tanah di Desa</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td  style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/pdfbukudatatanahdesa" class="tombolexport">Export PDF</a>
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
                            </style><br>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="3">No</th>
                                                <th id="tengah" rowspan="3">Aksi</th>
                                                <th id="tengah" rowspan="3">Nama Perorangan / Badan Hukum</th>
                                                <th id="tengah" rowspan="3">Jumlah (m2)</th>
                                                <th id="tengah" colspan="8">Status Hak Atas Tanah (m2)</th>
                                                <th id="tengah" colspan="12">Penggunaan Tanah (m2)</th>
                                                <th id="tengah" rowspan="3">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah" colspan="5">Sudah Bersertifikat</th>
                                            	<th id="tengah" colspan="3">Belum Bersertifikat</th>
                                            	<th id="tengah" colspan="5">Non Pertanian</th>
                                            	<th id="tengah" colspan="7">Pertanian</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Hak Milik</th>
                                            	<th id="tengah">Hak Guna Bangunan</th>
                                            	<th id="tengah">Hak Pakai</th>
                                                <th id="tengah">Hak Guna Usaha</th>
                                                <th id="tengah">Hak pengelolaan</th>
                                                <th id="tengah">Hak Milik Adat</th>
                                                <th id="tengah">Verponding Indonesie (VI)</th>
                                                <th id="tengah">Tanah Negara</th>
                                                <th id="tengah">Perumahan</th>
                                                <th id="tengah">Perdagangan & Jasa</th>
                                                <th id="tengah">Perantoran</th>
                                                <th id="tengah">Industri</th>
                                                <th id="tengah">Fasilitas Umum</th>
                                                <th id="tengah">Sawah</th>
                                                <th id="tengah">Tegalan</th>
                                                <th id="tengah">Perkebunan</th>
                                                <th id="tengah">Peternakan/Perikanan</th>
                                                <th id="tengah">Hutan Belukar</th>
                                                <th id="tengah">Hutan Lebat / Lindung</th>
                                                <th id="tengah">Tanah Kosong</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                        </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$row->nama_perorangan."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td id='tengah'>".$row->hak_milik."</td>
                                                        <td id='tengah'>".$row->hak_guna_bangunan."</td>
                                                        <td id='tengah'>".$row->hak_pakai."</td>
                                                        <td id='tengah'>".$row->Hak_guna_usaha."</td>
                                                        <td id='tengah'>".$row->hak_pengelolaan."</td>
                                                        <td id='tengah'>".$row->hak_milik_adat."</td>
                                                        <td id='tengah'>".$row->verponding_indonesie."</td>
                                                        <td id='tengah'>".$row->tanah_negara."</td>
                                                        <td id='tengah'>".$row->perumahan."</td>
                                                        <td id='tengah'>".$row->perdagangan_jasa."</td>
                                                        <td id='tengah'>".$row->perkantoran."</td>
                                                        <td id='tengah'>".$row->industri."</td>
                                                        <td id='tengah'>".$row->fasilitas_umum."</td>
                                                        <td id='tengah'>".$row->sawah."</td>
                                                        <td id='tengah'>".$row->tegalan."</td>
                                                        <td id='tengah'>".$row->perkebunan."</td>
                                                        <td id='tengah'>".$row->peternakan_perikanan."</td>
                                                        <td id='tengah'>".$row->hutan_belukar."</td>
                                                        <td id='tengah'>".$row->hutan_lebat_lindung."</td>
                                                        <td id='tengah'>".$row->tanah_kosong."</td>
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