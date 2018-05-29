

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Daftar Buku Rekapitulasi Jumlah Penduduk</h3></center>
                            </div>
                            <div class="module-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/tambah" class="tombolsimpanubah">Tambah Data</a>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                            <?php
                                                if($_SESSION['level']==1){
                                            ?>
                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/pdfbukurekapitulasijumlahpenduduk" class="tombolexport">Export PDF</a>
                                            <?php
                                                }else{

                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            <!-- <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/excel" class="btn btn-primary">Export MS.Excel</a><br><br> -->
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
                                            	<th id="tengah" rowspan="2">Dusun / Lingkungan</th>
                                                <th id="tengah" rowspan="2">Jumlah KK Awal Bulan</th>
                                                <th id="tengah" colspan="2">WNA awal bulan</th>
                                                <th id="tengah" colspan="2">WNI awal bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Anggota KK awal bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Penduduk awal bulan</th>
                                                <th id="tengah" colspan="2">Penambahan WNA yang Lahir</th>
                                                <th id="tengah" colspan="2">Penambahan WNI yang Lahir</th>
                                                <th id="tengah" colspan="2">Penambahan WNA karena Pindah</th>
                                                <th id="tengah" colspan="2">Penambahan WNI karena Pindah</th>
                                                <th id="tengah" colspan="2">Pengurangan WNA karena Kematian</th>
                                                <th id="tengah" colspan="2">Pengurangan WNI karena Kematian</th>
                                                <th id="tengah" colspan="2">Pengurangan WNA karena Pindah</th>
                                                <th id="tengah" colspan="2">Pengurangan WNI karena Pindah</th>
                                                <th id="tengah" colspan="2">Jumlah Penduduk WNA akhir bulan</th>
                                                <th id="tengah" colspan="2">Jumlah Penduduk WNI akhir bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah KK akhir bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Anggota Keluarga akhir bulan</th>
                                                <th id="tengah" rowspan="2">Jumlah Penduduk Akhir Bulan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
                                                <th id="tengah">L</th>
                                                <th id="tengah">P</th>
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
                                                            <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/lihat?id=<?php echo $id?>"><button style='width:100%' class='tombollihat'>Lihat</button></a>
                                                        <?php

                                                            }else{
                                                        ?>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/lihat?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombollihat'>Lihat</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/ubah?id=<?php echo $id?>"><button style='width:100%;margin-bottom:5px' class='tombolsimpanubah'>ubah</button></a>
                                                        <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/hapus?id=<?php echo $id?>" onclick="return konfirmasihapus()"><button style='width:100%;margin-bottom:5px' class='tombolhapus'>Hapus</button></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                        <?php
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$row->dusun."</td>
                                                        <td id='tengah'>".$row->jumlah_kk_awal_bulan."</td>
                                                        <td id='tengah'>".$row->wna_awal_laki_laki."</td>
                                                        <td id='tengah'>".$row->wna_awal_perempuan."</td>
                                                        <td id='tengah'>".$row->wni_awal_laki_laki."</td>
                                                        <td id='tengah'>".$row->wni_awal_perempuan."</td>
                                                        <td id='tengah'>".$row->jumlah_anggota_kk_awal_bulan."</td>
                                                        <td id='tengah'>".$row->jumlah_penduduk_awal_bulan."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_lahir_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_lahir_perempuan."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_lahir_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_lahir_perempuan."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wna_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->penambahan_wni_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_kematian_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_kematian_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_kematian_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_kematian_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wna_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_pindah_laki_laki."</td>
                                                        <td id='tengah'>".$row->pengurangan_wni_pindah_perempuan."</td>
                                                        <td id='tengah'>".$row->wna_akhir_laki_laki."</td>
                                                        <td id='tengah'>".$row->wna_akhir_perempuan."</td>
                                                        <td id='tengah'>".$row->wni_akhir_laki_laki."</td>
                                                        <td id='tengah'>".$row->wni_akhir_perempuan."</td>
                                                        <td id='tengah'>".$row->jumlah_kk_akhir_bulan."</td>
                                                        <td id='tengah'>".$row->jumlah_anggota_keluarga_akhir_bulan."</td>
                                                        <td id='tengah'>".$row->jumlah_penduduk_akhir."</td>
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
</script>s