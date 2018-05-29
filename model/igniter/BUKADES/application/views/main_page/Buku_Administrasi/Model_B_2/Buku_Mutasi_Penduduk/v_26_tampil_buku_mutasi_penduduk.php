

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Mutasi Penduduk</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/pdfbukumutasipenduduk" class="tombolexport">Export PDF</a>
                                            <?php
                                                }else{

                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                            	<th id="tengah" rowspan="2">Nama Lengkap</th>
                                                <th id="tengah" rowspan="2">Tempat Lahir</th>
                                                <th id="tengah" rowspan="2">Tanggal Lahir</th>
                                                <th id="tengah" rowspan="2">L / P</th>
                                                <th id="tengah" rowspan="2">Kewarganegaraan</th>
                                                <th id="tengah" colspan="6">Penduduk yang baru Datang</th>
                                                <th id="tengah" colspan="2">Penduduk yang Meninggal</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Asal Daerah</th>
                                                <th id="tengah">Tanggal Kedatangan</th>
                                                <th id="tengah">Tempat Lahir</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pengurangan Penduduk</th>
                                                <th id="tengah">Tanggal Pindah</th>
                                                <th id="tengah">Tempat Meninggal</th>
                                                <th id="tengah">Tanggal Meninggal</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$row->nama_lengkap."</td>
                                                        <td id='tengah'>".$row->tempat_lahir."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_lahir)."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->kewarganegaraan."</td>
                                                        <td id='tengah'>".$row->datang_asal_daerah."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->datang_tanggal_kedatangan)."</td>
                                                        <td id='tengah'>".$row->datang_tempat_lahir."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->datang_tanggal_lahir)."</td>
                                                        <td id='tengah'>".$row->datang_pengurangan_penduduk."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->datang_tanggal_pindah)."</td>
                                                        <td id='tengah'>".$row->meninggal_tempat_meninggal."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->meninggal_tanggal_meninggal)."</td>
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