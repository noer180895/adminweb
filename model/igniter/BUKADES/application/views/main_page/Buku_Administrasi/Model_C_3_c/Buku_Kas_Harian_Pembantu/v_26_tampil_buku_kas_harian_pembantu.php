

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Kas Harian Pembantu</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/pdfbukukasharianpembantu" class="tombolexport">Export PDF</a>
                                            <?php
                                        }else{

                                        }
                                        ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                            	<th id="tengah">Tanggal</th>
                                            	<th id="tengah">Uraian</th>
                                                <th id="tengah">Penerimaan (Rp)</th>
                                                <th id="tengah">Pengeluaran (Rp)</th>
                                                <th id="tengah">Jumlah</th>
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
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal)."</td>
                                                        <td id='tengah'>".$row->uraian."</td>
                                                        <td id='tengah'>".$row->penerimaan."</td>
                                                        <td id='tengah'>".$row->pengeluaran."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td>
                                                        ";
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
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
                                                        $jumlahpenerimaan = $this->m_26_buku_kas_harian_pembantu->jumlah('penerimaan');
                                                        $jumlahpengeluaran = $this->m_26_buku_kas_harian_pembantu->jumlah('pengeluaran');
                                                        $jumlah = $this->m_26_buku_kas_harian_pembantu->jumlah('jumlah');
                                                    ?>
                                                    <th style="text-align: right;vertical-align: middle;" colspan="3">Jumlah</th>
                                                    <th id="tengah"><?php echo $jumlahpenerimaan[0]->penerimaan?></th>
                                                    <th id="tengah"><?php echo $jumlahpengeluaran[0]->pengeluaran?></th>
                                                    <th id="tengah"><?php echo $jumlah[0]->jumlah?></th>
                                                    <th id="tengah"></th>
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