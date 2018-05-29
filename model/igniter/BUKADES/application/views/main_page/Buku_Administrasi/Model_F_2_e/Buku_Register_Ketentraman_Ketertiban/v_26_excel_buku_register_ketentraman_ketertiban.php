<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Register Gangguan Ketentraman dan Ketertiban.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                        <table>
                            <tr>
                                <td colspan="8">
                                    
                                <center><h3>Daftar Buku Register Ketentraman dan Ketertiban Tahun <?php echo date('Y')?></h3></center>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8">
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8">
                                    <p>Model F 2 e</p>
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
                                                <th id="tengah" rowspan="3">Nomor</th>
                                                <th id="tengah" rowspan="3">Tanggal Kejadian Kejahatan (Kepolisian/Kecelakaan) Bencana Alam Dll</th>
                                                <th id="tengah" rowspan="3">Uraian Singkat Terjadinya Peristiwa</th>
                                                <th id="tengah" colspan="4">Kerugian</th>
                                                <th id="tengah" rowspan="3">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah" colspan="2">Benda</th>
                                                <th id="tengah" rowspan="2">Banyaknya Korban Luka</th>
                                                <th id="tengah" rowspan="2">Banyaknya Korban Jiwa</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Nama Barang</th>
                                                <th id="tengah">Taksiran Harga</th>
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
                                                        <td id='tengah'>".$row->tanggal_kejadian."</td>
                                                        <td id='tengah'>".$row->uraian_singkat."</td>
                                                        <td id='tengah'>".$row->nama_barang."</td>
                                                        <td id='tengah'>".$row->taksiran_harga."</td>
                                                        <td id='tengah'>".$row->korban_luka."</td>
                                                        <td id='tengah'>".$row->korban_jiwa."</td>
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
