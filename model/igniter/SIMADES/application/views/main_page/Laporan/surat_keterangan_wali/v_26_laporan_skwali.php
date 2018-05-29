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
                <h3>Laporan Surat Keterangan Wali Nikah</h3>
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
                                <th class="jaraktabel">Umur</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Nama Laki-laki</th>
                                <th class="jaraktabel">Umur Laki-Laki</th>
                                <th class="jaraktabel">Agama Laki-Laki</th>
                                <th class="jaraktabel">Alamat Laki-Laki</th>
                                <th class="jaraktabel">Nama Perempuan</th>
                                <th class="jaraktabel">Umur Perempuan</th>
                                <th class="jaraktabel">Agama Perempuan</th>
                                <th class="jaraktabel">Alamat Perempuan</th>
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
                                <th class="jaraktabel">Umur</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Nama Laki-laki</th>
                                <th class="jaraktabel">Umur Laki-Laki</th>
                                <th class="jaraktabel">Agama Laki-Laki</th>
                                <th class="jaraktabel">Alamat Laki-Laki</th>
                                <th class="jaraktabel">Nama Perempuan</th>
                                <th class="jaraktabel">Umur Perempuan</th>
                                <th class="jaraktabel">Agama Perempuan</th>
                                <th class="jaraktabel">Alamat Perempuan</th>
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
                                                <td class='jaraktabel'>".$rowsurat->nama."</td>
                                                <td class='jaraktabel'>".$rowsurat->umur."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_dua."</td>
                                                <td class='jaraktabel'>".$rowsurat->umur_dua."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama_dua."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat_dua."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_tiga."</td>
                                                <td class='jaraktabel'>".$rowsurat->umur_tiga."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama_tiga."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat_tiga."</td>
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