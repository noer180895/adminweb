<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Mutasi Penduduk.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="15">
                                <center><h3>Daftar Buku Mutasi Penduduk Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="15">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="15">
                                        <p>Model B 2</p>
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
                                                <th id="tengah" rowspan="2">Tempat Lahir</th>
                                                <th id="tengah" rowspan="2">Tanggal Lahir</th>
                                                <th id="tengah" rowspan="2">L / P</th>
                                                <th id="tengah" rowspan="2">Kewarganegaraan</th>
                                                <th id="tengah" colspan="6">Penduduk yang baru Datang</th>
                                                <th id="tengah" colspan="2">Penduduk yang Meninggal</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Asal Daerah</th>
                                                <th id="tengah">Tanggal Kedatangan</th>
                                                <th id="tengah">Tempat Lahir</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pengurangan Penduduk</th>
                                                <th id="tengah">Tanggal Pindah</th>
                                                <th id="tengah">Tempat Meninggal</th>
                                                <th id="tengah">Tanggal Meninggal</th>
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
                                                        <td id='tengah'>".$row->tempat_lahir."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->kewarganegaraan."</td>
                                                        <td id='tengah'>".$row->datang_asal_daerah."</td>
                                                        <td id='tengah'>".$row->datang_tanggal_kedatangan."</td>
                                                        <td id='tengah'>".$row->datang_tempat_lahir."</td>
                                                        <td id='tengah'>".$row->datang_tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->datang_pengurangan_penduduk."</td>
                                                        <td id='tengah'>".$row->datang_tanggal_pindah."</td>
                                                        <td id='tengah'>".$row->meninggal_tempat_meninggal."</td>
                                                        <td id='tengah'>".$row->meninggal_tanggal_meninggal."</td>
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
