<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Register Pengeluaran dan Penerimaan Surat Keterangan.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="11">
                                <center><h3>Daftar Buku Register Pengeluaran dan Penerimaan Surat Keterangan Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <p>Model F 2 c</p>
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
                                                <th id="tengah" colspan="3">Identitas Surat Keterangan</th>
                                                <th id="tengah" colspan="4">Atas Nama</th>
                                                <th id="tengah" rowspan="2">Digunakan Untuk</th>
                                                <th id="tengah" rowspan="2">Berlaku S.D</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Nomor</th>
                                                <th id="tengah">Tentang</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pekerjaan</th>
                                                <th id="tengah">Alamat</th>
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
                                                        <td id='tengah'>".$row->tanggal_identitas."</td>
                                                        <td id='tengah'>".$row->nomor_identitas."</td>
                                                        <td id='tengah'>".$row->tentang_identitas."</td>
                                                        <td id='tengah'>".$row->nama."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->pekerjaan."</td>
                                                        <td id='tengah'>".$row->alamat."</td>
                                                        <td id='tengah'>".$row->digunakan_untuk."</td>
                                                        <td id='tengah'>".$row->berlaku."</td>
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
