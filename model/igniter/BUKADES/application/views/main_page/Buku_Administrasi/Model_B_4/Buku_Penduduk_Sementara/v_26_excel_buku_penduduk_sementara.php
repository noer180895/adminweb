<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Penduduk Sementara.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="13">
                                <center><h3>Daftar Buku Penduduk Sementara  Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <p>Model B 4</p>
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
                                                <th id="tengah">Nama Lengkap</th>
                                                <th id="tengah">L / P</th>
                                                <th id="tengah">No. Tanda Pengenal</th>
                                                <th id="tengah">Tempat & Tanggal Lahir</th>
                                                <th id="tengah">Pekerjaan</th>
                                                <th id="tengah">Kewarganegaraan</th>
                                                <th id="tengah">Asal Penduduk</th>
                                                <th id="tengah">Maksud & Tujuan Datang</th>
                                                <th id="tengah">Nama Alamat yang didatangi</th>
                                                <th id="tengah">Tanggal Kedatangan</th>
                                                <th id="tengah">Tanggal Kepergian</th>
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
                                                        <td id='tengah'>".$row->nama_lengkap."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->no_tanda_pengenal."</td>
                                                        <td id='tengah'>".$row->tempat_lahir."/".$row->tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->pekerjaan."</td>
                                                        <td id='tengah'>".$row->kewarganegaraan."</td>
                                                        <td id='tengah'>".$row->asal_penduduk."</td>
                                                        <td id='tengah'>".$row->tujuan_datang."</td>
                                                        <td id='tengah'>".$row->alamat_yang_didatangi."</td>
                                                        <td id='tengah'>".$row->tanggal_kedatangan."</td>
                                                        <td id='tengah'>".$row->tanggal_kepergian."</td>
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
