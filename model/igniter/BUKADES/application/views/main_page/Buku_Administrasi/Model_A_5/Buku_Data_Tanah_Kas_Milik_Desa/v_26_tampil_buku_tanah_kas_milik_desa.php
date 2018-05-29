

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Tanah Kas Milik Desa</h3></center>
                            </div>
                            <div class="module-body">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/tambah" class="tombolsimpanubah">Tambah Data</a>            
                                    </td>
                                    <td style="text-align: right;">
                                        <?php
                                            if($_SESSION['level']==1){
                                        ?>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/pdfbukudatatanahkasmilikdesa" class="tombolexport">Export PDF</a>
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
                                                <th id="tengah" rowspan="3">Asal Tanah Milik Desa / Tanah Kas Desa</th>
                                                <th id="tengah" rowspan="3">Nomor Sertifikat Buku Letter C / Persil</th>
                                                <th id="tengah" rowspan="3">Luas (Ha)</th>
                                                <th id="tengah" rowspan="3">Klas</th>
                                                <th id="tengah" colspan="6">Perolehan Tanah Kas Desa</th>
                                                <th id="tengah" colspan="5">Jenis Tanah Kas Desa</th>
                                                <th id="tengah" colspan="2">Patok Tanda Batas</th>
                                                <th id="tengah" colspan="2">Papan Nama</th>
                                                <th id="tengah" rowspan="3">Lokasi</th>
                                                <th id="tengah" rowspan="3">Peruntukan</th>
                                                <th id="tengah" rowspan="3">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah" rowspan="2">Asli Milik Desa</th>
                                            	<th id="tengah" colspan="3">Bantuan</th>
                                            	<th id="tengah" rowspan="2">lain-Lain</th>
                                            	<th id="tengah" rowspan="2">Tanggal Perolehan</th>
                                            	<th id="tengah" rowspan="2">Sawah</th>
                                            	<th id="tengah" rowspan="2">Tegal</th>
                                            	<th id="tengah" rowspan="2">Kebun</th>
                                            	<th id="tengah" rowspan="2">Tambak / Kolam</th>
                                            	<th id="tengah" rowspan="2">tanah Kering / Daratan</th>
                                            	<th id="tengah" rowspan="2">Ada</th>
                                            	<th id="tengah" rowspan="2">Tidak ada</th>
                                            	<th id="tengah" rowspan="2">Ada</th>
                                            	<th id="tengah" rowspan="2">Tidak Ada</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Pusat</th>
                                            	<th id="tengah">Provinsi</th>
                                            	<th id="tengah">Kabupaten/Kota</th>
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
                                                        ?>
                                                        <td id='tengah'><?php echo $a?></td>
                                                        <td>
                                                        <?php
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                        </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$row->asal_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_sertifikat."</td>
                                                        <td id='tengah'>".$row->luas."</td>
                                                        <td id='tengah'>".$row->klas."</td>
                                                        <td id='tengah'>".$row->asli_milik_desa."</td>
                                                        <td id='tengah'>".$row->pusat."</td>
                                                        <td id='tengah'>".$row->provinsi."</td>
                                                        <td id='tengah'>".$row->kabupaten."</td>
                                                        <td id='tengah'>".$row->lain_lain."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_perolehan)."</td>
                                                        <td id='tengah'>".$row->sawah."</td>
                                                        <td id='tengah'>".$row->tegal."</td>
                                                        <td id='tengah'>".$row->kebun."</td>
                                                        <td id='tengah'>".$row->tambak_kolam."</td>
                                                        <td id='tengah'>".$row->tanah_kering_daratan."</td>
                                                        <td id='tengah'>".$row->patok_ada."</td>
                                                        <td id='tengah'>".$row->patok_tidak_ada."</td>
                                                        <td id='tengah'>".$row->papan_ada."</td>
                                                        <td id='tengah'>".$row->papan_tidak_ada."</td>
                                                        <td id='tengah'>".$row->lokasi."</td>
                                                        <td id='tengah'>".$row->peruntukan."</td>
                                                        <td id='tengah'>".$row->ket."</td>
                                                        ";
                                                        ?>
                                                    <?php
                                                    }
                                                ?>
                                                    </tr>
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