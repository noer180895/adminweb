<style type="text/css">
    #tengah{
        vertical-align: middle;
        text-align: center;
    }
</style>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Keputusan Kepala Desa</h3></center>
                            </div>
                            <div class="module-body">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_2/Buku_Data_Keputusan_Kepala_Desa/c_26_buku_keputusan_kepala_desa/tambah" class="tombolsimpanubah">Tambah Data</a>    
                                    </td>
                                    <td style="text-align: right;">
                                        <?php
                                            if($_SESSION['level']==1){
                                        ?>
                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_2/Buku_Data_Keputusan_kepala_Desa/c_26_buku_keputusan_kepala_desa/pdfbukukeputusankepaladesa" class="tombolexport">Export PDF</a>
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
                                                <th id="tengah">No</th>
                                                <th id="tengah">Nomor & Tanggal Keputusan Kepala Desa</th>
                                                <th id="tengah">Tentang</th>
                                                <th id="tengah">Uraian Singkat</th>
                                                <th id="tengah">Nomor & Tanggal Dilaporkan</th>
                                                <th id="tengah">Keterangan</th>
                                                <th id="tengah">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                    foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$a."</td>
                                                        <td id='tengah'>".$row->nomor_keputusan_kepala_desa." / ".TanggalIndodua($row->tanggal_keputusan_kepala_desa)."</td>
                                                        <td id='tengah'>".$row->tentang."</td>
                                                        <td id='tengah'>".$row->uraian_singkat."</td>
                                                        <td id='tengah'>".$row->nomor_dilaporkan." / ".TanggalIndodua($row->tanggal_dilaporkan)."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        <td>
                                                        ";
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_2/Buku_Data_Keputusan_Kepala_Desa/c_26_buku_keputusan_kepala_desa/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_2/Buku_Data_Keputusan_Kepala_Desa/c_26_buku_keputusan_kepala_desa/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_2/Buku_Data_Keputusan_Kepala_Desa/c_26_buku_keputusan_kepala_desa/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_2/Buku_Data_Keputusan_Kepala_Desa/c_26_buku_keputusan_kepala_desa/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
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