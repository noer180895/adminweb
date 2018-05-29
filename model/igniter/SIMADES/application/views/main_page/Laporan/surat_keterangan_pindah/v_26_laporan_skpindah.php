<style type="text/css">
    .jaraktabel{
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>         
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Laporan Surat Keterangan Pindah</h3>
            </div>
            <div class="module-body">
                <div class="module-body table">
                    <table cellpadding="0" id="example" 
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Nomor KK</th>
                                <th class="jaraktabel">Nomor NIK</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Kewarganegaraan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Pindah Ke</th>
                                <th class="jaraktabel">Nama Desa Baru</th>
                                <th class="jaraktabel">Nama Kecamatan Baru</th>
                                <th class="jaraktabel">Nama Kabupaten Baru</th>
                                <th class="jaraktabel">Alasan Pindah</th>
                                <th class="jaraktabel">Jumlah Pengikut</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Nomor KK</th>
                                <th class="jaraktabel">Nomor NIK</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Kewarganegaraan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Pindah Ke</th>
                                <th class="jaraktabel">Nama Desa Baru</th>
                                <th class="jaraktabel">Nama Kecamatan Baru</th>
                                <th class="jaraktabel">Nama Kabupaten Baru</th>
                                <th class="jaraktabel">Alasan Pindah</th>
                                <th class="jaraktabel">Jumlah Pengikut</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                                <?php
                                    $a=0;
                                     foreach ($ambildatasurat as $rowsurat) {
                                        $id=$rowsurat->id;
                                        $a++;
                                ?>

                                    <tr onClick="ambildata('<?php echo $a;?>')">
                                        <?php
                                            echo 
                                                "
                                                <td id='nomor".$a."' class='jaraktabel'>".$a."</td>
                                                <td class='jaraktabel'>".$rowsurat->nomor_surat."</td>
                                                <td class='jaraktabel'>".$rowsurat->rt."</td>
                                                <td class='jaraktabel'>".$rowsurat->rw."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_lengkap."</td>
                                                <td class='jaraktabel'>".$rowsurat->nomor_kk."</td>
                                                <td class='jaraktabel'>".$rowsurat->nomor_nik."</td>
                                                <td class='jaraktabel'>".$rowsurat->jenis_kelamin."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat."</td>
                                                <td class='jaraktabel'>".$rowsurat->pindah_ke."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_desa_baru."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_kecamatan_baru."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_kabupaten_baru."</td>
                                                <td class='jaraktabel'>".$rowsurat->alasan_pindah."</td>
                                                <td class='jaraktabel'>".$rowsurat->jumlah_pengikut."</td>
                                                <td class='jaraktabel'>".$rowsurat->tanggal."</td>
                                                <td class='jaraktabel'>".$rowsurat->penanda_tangan."</td>
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

    $(document).ready(function() {
    $('#example').DataTable();
    });

</script>  