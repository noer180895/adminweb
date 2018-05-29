
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Aparat Pemerintah Desa</h3></center>
                            </div>
                            <div class="module-body">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/tambah" class="tombolsimpanubah">Tambah Data</a>            
                                    </td>
                                    <td style="text-align: right;">
                                        <?php
                                            if($_SESSION['level']==1){
                                        ?>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/pdfbukuaparatpemerintahdesa" class="tombolexport">Export PDF</a>
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
                                                <th id="tengah">No</th>
                                                <th id="tengah">Aksi</th>
                                                <th id="tengah">Nama Lengkap</th>
                                                <th id="tengah">NIAP</th>
                                                <th id="tengah">NIP/NRP</th>
                                                <th id="tengah">Jenis Kelamin</th>
                                                <th id="tengah">Tempat & Tanggal Lahir</th>
                                                <th id="tengah">Agama</th>
                                                <th id="tengah">Pangkat/Golongan</th>
                                                <th id="tengah">Jabatan</th>
                                                <th id="tengah">Pendidikan Terakhir</th>
                                                <th id="tengah">Nomor & Tanggal Keputusan Pengangkatan</th>
                                                <th id="tengah">Nomor & Tanggal Keputusan Pemberhentian</th>
                                                <th id="tengah">Keterangan</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                        </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$row->nama_lengkap."</td>
                                                        <td id='tengah'>".$row->niap."</td>
                                                        <td id='tengah'>".$row->nip_nrp."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->tempat_lahir." / ".TanggalIndodua($row->tanggal_lahir)."</td>
                                                        <td id='tengah'>".$row->agama."</td>
                                                        <td id='tengah'>".$row->pangkat_golongan."</td>
                                                        <td id='tengah'>".$row->jabatan."</td>
                                                        <td id='tengah'>".$row->pendidikan_terakhir."</td>
                                                        <td id='tengah'>".$row->nomor_keputusan_pengangkatan." / ".TanggalIndodua($row->tanggal_keputusan_pengangkatan)."</td>
                                                        <td id='tengah'>".$row->nomor_keputusan_pemberhentian." / ".TanggalIndodua($row->tanggal_keputusan_pemberhentian)."</td>
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