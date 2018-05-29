

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Data Agenda BPD</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/pdfbukuagendabpd" class="tombolexport">Export PDF</a>
                                            <?php
                                        }else{

                                        }
                                        ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                                <th id="tengah" >Agenda</th>
                                                <th id="tengah" colspan="4">Surat Masuk</th>
                                                <th id="tengah" colspan="3">Surat Keluar</th>
                                                <th id="tengah" rowspan="3">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah" rowspan="2">Tanggal</th>
                                                <th id="tengah" colspan="2">Surat</th>
                                                <th id="tengah" rowspan="2">Dari Siapa</th>
                                                <th id="tengah" rowspan="2">Isi Singkat</th>
                                                <th id="tengah" rowspan="2">Isi Singkat</th>
                                                <th id="tengah" rowspan="2">Tanggal Pengiriman</th>
                                                <th id="tengah" rowspan="2">Alamat</th> 
                                            </tr>
                                            <tr>
                                                <th id="tengah">Nomor</th>
                                                <th id="tengah">Tanggal</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                    <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_agenda)."</td>
                                                        <td id='tengah'>".$row->nomor_surat_masuk."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_surat_masuk)."</td>
                                                        <td id='tengah'>".$row->dari_surat_masuk."</td>
                                                        <td id='tengah'>".$row->isi_surat_masuk."</td>
                                                        <td id='tengah'>".$row->isi_surat_keluar."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_surat_keluar)."</td>
                                                        <td id='tengah'>".$row->alamat_surat_keluar."</td>
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