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
                <h3>Laporan Surat Persetujuan Mempelai</h3>
            </div>
            <div class="module-body">
                <div class="module-body table">
                    <table cellpadding="0" id="example" 
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">Nama Suami</th>
                                <th class="jaraktabel">Bin</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir Suami</th>
                                <th class="jaraktabel">Kewarganegaraan Suami</th>
                                <th class="jaraktabel">Agama Suami</th>
                                <th class="jaraktabel">Pekerjaan Suami</th>
                                <th class="jaraktabel">Alamat Suami</th>
                                <th class="jaraktabel">Nama Istri</th>
                                <th class="jaraktabel">Binti</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir Istri</th>
                                <th class="jaraktabel">Kewarganegaraan Istri</th>
                                <th class="jaraktabel">Agama Istri</th>
                                <th class="jaraktabel">Pekerjaan Istri</th>
                                <th class="jaraktabel">Alamat Istri</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan Suami</th>
                                <th class="jaraktabel">Penanda Tangan Istri</th>
                            </tr>
                        </thead>
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
                                                <td class='jaraktabel'>".$rowsurat->nama_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->bin."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->binti."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->tanggal."</td>
                                                <td class='jaraktabel'>".$rowsurat->penanda_tangan_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->penanda_tangan_istri."</td>
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