<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Data Keputusan BPD.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="6">
                                <center><h3>Daftar Buku Data Keputusan BPD Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <p>Model E 2</p>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            <div class="module-body">
                            
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                                <div style="height: 410px; overflow: scroll;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="2">Nomor</th>
                                                <th id="tengah" colspan="2">Tanggal dan Nomor Keputusan</th>
                                                <th id="tengah" rowspan="2">Tentang</th>
                                                <th id="tengah" rowspan="2">Uraian Singkat</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Nomor</th>
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
                                                        <td id='tengah'>".$row->keputusan_tanggal."</td>
                                                        <td id='tengah'>".$row->keputusan_nomor."</td>
                                                        <td id='tengah'>".$row->tentang."</td>
                                                        <td id='tengah'>".$row->uraian_singkat."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        ";
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
                            </div>
