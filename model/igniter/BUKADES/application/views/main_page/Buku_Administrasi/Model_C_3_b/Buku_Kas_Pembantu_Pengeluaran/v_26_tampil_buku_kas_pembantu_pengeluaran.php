

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Kas Pembantu Perincian Obyek Pengeluaran</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/pdfbukukaspembantupengeluaran" class="tombolexport">Export PDF</a>
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
                                            	<th id="tengah">Nomor</th>
                                            	<th id="tengah">Nomor BKU Pengeluaran</th>
                                            	<th id="tengah">Tanggal Pengeluaran</th>
                                                <th id="tengah">Nomor SPP & Bukti Pengeluaran Lainnya</th>
                                                <th id="tengah">Jumlah (Rp)</th>
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
                                                        <td id='tengah'>".$row->nomor_bku_pengeluaran."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_pengeluaran)."</td>
                                                        <td id='tengah'>".$row->nomor_spp."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td>
                                                        ";
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                                <tfoot>
                                                    <?php
                                                        $jumlah = $this->m_26_buku_kas_pembantu_pengeluaran->jumlah('jumlah');
                                                ?>
                                                    <th colspan="3" style="text-align: right;">Jumlah</th>
                                                    <th style="text-align: center;"><?php echo $hitungnomorspp?></th>
                                                    <th style="text-align: center"><?php echo $jumlah[0]->jumlah?></th>
                                                    <th></th>
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