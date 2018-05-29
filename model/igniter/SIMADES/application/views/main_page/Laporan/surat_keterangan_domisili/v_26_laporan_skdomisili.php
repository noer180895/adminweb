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
                <h3>Laporan Surat Keterangan Domisili</h3>
            </div>
            <div class="module-body">
                <div class="module-body table" style="height: 480px">
                    <table cellpadding="0" id='example'
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Status Perkawinan</th>
                                <th class="jaraktabel">Kewarganegaraan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Tujuan</th>
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
                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Status Perkawinan</th>
                                <th class="jaraktabel">Kewarganegaraan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Tujuan</th>
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
                                                <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir."</td>
                                                <td class='jaraktabel'>".$rowsurat->jenis_kelamin."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                <td class='jaraktabel'>".$rowsurat->status_perkawinan."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat."</td>
                                                <td class='jaraktabel'>".$rowsurat->tujuan."</td>
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
    } );
</script>