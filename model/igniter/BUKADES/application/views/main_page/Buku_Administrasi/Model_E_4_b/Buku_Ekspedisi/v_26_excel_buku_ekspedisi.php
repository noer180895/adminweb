<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Data Ekspedisi.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="5">
                                <center><h3>Daftar Buku Data Agenda BPD Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <p>Model E b</p>
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
                                                <th id="tengah">Nomor</th>
                                                <th id="tengah">Tanggal Pengiriman</th>
                                                <th id="tengah">Tanggal & Nomor Surat</th>
                                                <th id="tengah">Perihal</th>
                                                <th id="tengah">Keterangan</th>
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
                                                        <td id='tengah'>".$row->tanggal_pengiriman."</td>
                                                        <td id='tengah'>".$row->tanggal_surat."/".$row->nomor_surat."</td>
                                                        <td id='tengah'>".$row->perihal."</td>
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
