<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Induk Penduduk Desa.xls");
?>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="16">
                                <center><h3>Daftar Buku Induk Penduduk Desa</h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="16">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="16">
                                        <p>Model B 1</p>
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
                                                <th id="tengah">Status Perkawinan</th>
                                                <th id="tengah">Tempat Lahir</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Agama</th>
                                                <th id="tengah">Pendidikan Terakhir</th>
                                                <th id="tengah">Pekerjaan</th>
                                                <th id="tengah">Kepandaian Membaca</th>
                                                <th id="tengah">Kewarganegaraan</th>
                                                <th id="tengah">Alamat Lengkap</th>
                                                <th id="tengah">Hubungan Keluarga</th>
                                                <th id="tengah">No KTP</th>
                                                <th id="tengah">Nomor KK</th>
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
                                                        <td id='tengah'>".$row->status_perkawinan."</td>
                                                        <td id='tengah'>".$row->tempat_lahir."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->agama."</td>
                                                        <td id='tengah'>".$row->pendidikan_terakhir."</td>
                                                        <td id='tengah'>".$row->pekerjaan."</td>
                                                        <td id='tengah'>".$row->kepandaian_membaca."</td>
                                                        <td id='tengah'>".$row->kewarganegaraan."</td>
                                                        <td id='tengah'>".$row->alamat_lengkap."</td>
                                                        <td id='tengah'>".$row->hubungan_keluarga."</td>
                                                        <td id='tengah'>".$row->no_ktp."</td>
                                                        <td id='tengah'>".$row->no_kk."</td>
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
