<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Anggota BPD.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="13">
                                <center><h3>Daftar Buku Anggota BPD Tahun <?php echo date('Ys')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <p>Model E 1</p>
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
                                                <th id="tengah" rowspan="2">Nama Lengkap</th>
                                                <th id="tengah" rowspan="2">L / P</th>
                                                <th id="tengah" colspan="2">Tempat dan Tanggal Lahir</th>
                                                <th id="tengah" rowspan="2">Agama</th>
                                                <th id="tengah" rowspan="2">Jabatan</th>
                                                <th id="tengah" rowspan="2">Pendidikan terakhir</th>
                                                <th id="tengah" colspan="2">Keputusan Pengangkatan</th>
                                                <th id="tengah" colspan="2">Keputusan Pemberhentian</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Tempat</th>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Nomor</th>
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
                                                        <td id='tengah'>".$row->nama_lengkap."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->tempat_lahir."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->agama."</td>
                                                        <td id='tengah'>".$row->jabatan."</td>
                                                        <td id='tengah'>".$row->pendidikan_terakhir."</td>
                                                        <td id='tengah'>".$row->keputusan_pengangkatan_tanggal."</td>
                                                        <td id='tengah'>".$row->keputusan_pengangkatan_nomor."</td>
                                                        <td id='tengah'>".$row->keputusan_pemberhentian_tanggal."</td>
                                                        <td id='tengah'>".$row->keputusan_pemberhentian_nomor."</td>
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
