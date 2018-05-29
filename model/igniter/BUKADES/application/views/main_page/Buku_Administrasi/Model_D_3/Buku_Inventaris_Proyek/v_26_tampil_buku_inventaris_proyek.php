

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Inventaris Proyek</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/pdfbukuinventarisproyek" class="tombolexport">Export PDF</a>
                                            <?php
                                        }else{

                                        }
                                        ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                                <th id="tengah">Nama Kegiatan / Proyek</th>
                                                <th id="tengah">Volume</th>
                                                <th id="tengah">Jumlah BIaya (Rp)</th>
                                                <th id="tengah">Lokasi Proyek</th>
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
                                                        <td id='tengah'>".$row->nama_proyek."</td>
                                                        <td id='tengah'>".$row->volume."</td>
                                                        <td id='tengah'>".$row->jumlah_biaya."</td>
                                                        <td id='tengah'>".$row->lokasi_proyek."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        <td>
                                                        ";
                                                        if($_SESSION['level']==2){
                                                        
                                                        ?>
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
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