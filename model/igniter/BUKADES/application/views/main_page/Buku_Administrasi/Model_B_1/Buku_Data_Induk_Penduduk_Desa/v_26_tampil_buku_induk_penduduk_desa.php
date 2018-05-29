

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Induk Penduduk Desa</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/tambah" class="tombolsimpanubah">Tambah Data</a>
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){

                                                    
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/pdfbukudataindukpendudukdesa" class="tombolexport">Export PDF</a>
                                            
                                            <?php
                                            }else{

                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table><br>
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                            	<th id="tengah">Nomor</th>
                                                <th id="tengah">Aksi</th>
                                            	<th id="tengah">Nama Lengkap</th>
                                            	<th id="tengah">L / P</th>
                                                <th id="tengah">Status Perkawinan</th>
                                                <th id="tengah">Tempat Lahir</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Agama</th>
                                                <th id="tengah">Pendidikan Terakhir</th>
                                                <th id="tengah">Pekerjaan</th>
                                                <th id="tengah">Kepandaian Membaca</th>
                                                <th id="tengah">Kewarganegaraan</th>
                                                <th id="tengah">Alamat Lengkap</th>
                                                <th id="tengah">Hubungan Keluarga</th>
                                                <th id="tengah">No KTP</th>
                                                <th id="tengah">Nomor KK</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$row->nama_lengkap."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->status_perkawinan."</td>
                                                        <td id='tengah'>".$row->tempat_lahir."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_lahir)."</td>
                                                        <td id='tengah'>".$row->agama."</td>
                                                        <td id='tengah'>".$row->pendidikan_terakhir."</td>
                                                        <td id='tengah'>".$row->pekerjaan."</td>
                                                        <td id='tengah'>".$row->kepandaian_membaca."</td>
                                                        <td id='tengah'>".$row->kewarganegaraan."</td>
                                                        <td id='tengah'>".$row->alamat_lengkap."</td>
                                                        <td id='tengah'>".$row->hubungan_keluarga."</td>
                                                        <td id='tengah'>".$row->no_ktp."</td>
                                                        <td id='tengah'>".$row->no_kk."</td>
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