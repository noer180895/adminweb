<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Tanah Di Desa.xls");
?>

                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="24">
                                <center><h3>Daftar Buku Tanah di Desa Tahun <?php echo date('Y')?></h3></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="24">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="24">
                                        <p>Model A 6</p>
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
                                <div style="height: 410px;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="3">No</th>
                                                <th id="tengah" rowspan="3">Nama Perorangan / Badan Hukum</th>
                                                <th id="tengah" rowspan="3">Jumlah (m2)</th>
                                                <th id="tengah" colspan="13">Status Hak Atas Tanah (m2)</th>
                                                <th id="tengah" colspan="7">Penggunaan Tanah (m2)</th>
                                                <th id="tengah" rowspan="3">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah" colspan="5">Sudah Bersertifikat</th>
                                            	<th id="tengah" colspan="3">Belum Bersertifikat</th>
                                            	<th id="tengah" colspan="5">Non Pertanian</th>
                                            	<th id="tengah" colspan="7">Pertanian</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Hak Milik</th>
                                            	<th id="tengah">Hak Guna Bangunan</th>
                                            	<th id="tengah">Hak Pakai</th>
                                                <th id="tengah">Hak Guna Usaha</th>
                                                <th id="tengah">Hak pengelolaan</th>
                                                <th id="tengah">Hak Milik Adat</th>
                                                <th id="tengah">Verponding Indonesie (VI)</th>
                                                <th id="tengah">Tanah Negara</th>
                                                <th id="tengah">Perumahan</th>
                                                <th id="tengah">Perdagangan & Jasa</th>
                                                <th id="tengah">Perantoran</th>
                                                <th id="tengah">Industri</th>
                                                <th id="tengah">Fasilitas Umum</th>
                                                <th id="tengah">Sawah</th>
                                                <th id="tengah">Tegalan</th>
                                                <th id="tengah">Perkebunan</th>
                                                <th id="tengah">Peternakan/Perikanan</th>
                                                <th id="tengah">Hutan Belukar</th>
                                                <th id="tengah">Hutan Lebat / Lindung</th>
                                                <th id="tengah">Tanah Kosong</th>
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
                                                        <td id='tengah'>".$row->nama_perorangan."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td id='tengah'>".$row->hak_milik."</td>
                                                        <td id='tengah'>".$row->hak_guna_bangunan."</td>
                                                        <td id='tengah'>".$row->hak_pakai."</td>
                                                        <td id='tengah'>".$row->Hak_guna_usaha."</td>
                                                        <td id='tengah'>".$row->hak_pengelolaan."</td>
                                                        <td id='tengah'>".$row->hak_milik_adat."</td>
                                                        <td id='tengah'>".$row->verponding_indonesie."</td>
                                                        <td id='tengah'>".$row->tanah_negara."</td>
                                                        <td id='tengah'>".$row->perumahan."</td>
                                                        <td id='tengah'>".$row->perdagangan_jasa."</td>
                                                        <td id='tengah'>".$row->perkantoran."</td>
                                                        <td id='tengah'>".$row->industri."</td>
                                                        <td id='tengah'>".$row->fasilitas_umum."</td>
                                                        <td id='tengah'>".$row->sawah."</td>
                                                        <td id='tengah'>".$row->tegalan."</td>
                                                        <td id='tengah'>".$row->perkebunan."</td>
                                                        <td id='tengah'>".$row->peternakan_perikanan."</td>
                                                        <td id='tengah'>".$row->hutan_belukar."</td>
                                                        <td id='tengah'>".$row->hutan_lebat_lindung."</td>
                                                        <td id='tengah'>".$row->tanah_kosong."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
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
                </div>