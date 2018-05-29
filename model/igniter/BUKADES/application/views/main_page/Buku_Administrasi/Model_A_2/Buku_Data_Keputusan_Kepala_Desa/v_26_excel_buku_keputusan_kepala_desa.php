<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Keputusan Kepala Desa.xls");
?>
                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                            <table border="1">
                            <tr>
                                <td colspan="6">
                                    
                                <center><h3>Daftar Buku Keputusan Kepala Desa Tahun <?php echo date('Y')?></h3></center>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Model A 2</p>
                                </td>
                            </tr>
                            </table>
                            </div>
                           <style type="text/css">
                            .tengah{
                                text-align: center;
                            }
                           </style>
                                 <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th class="tengah">No</th>
                                                <th class="tengah">Nomor & Tanggal Keputusan Kepala Desa</th>
                                                <th class="tengah">Tentang</th>
                                                <th class="tengah">Uraian Singkat</th>
                                                <th class="tengah">Nomor & Tanggal Dilaporkan</th>
                                                <th class="tengah">Keterangan</th>
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
                                                        <td class='tengah'>".$a."</td>
                                                        <td class='tengah'>".$row->nomor_tanggal_keputusan_kepala_desa."</td>
                                                        <td class='tengah'>".$row->tentang."</td>
                                                        <td class='tengah'>".$row->uraian_singkat."</td>
                                                        <td class='tengah'>".$row->nomor_tanggal_dilaporkan."</td>
                                                        <td class='tengah'>".$row->keterangan."</td>
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