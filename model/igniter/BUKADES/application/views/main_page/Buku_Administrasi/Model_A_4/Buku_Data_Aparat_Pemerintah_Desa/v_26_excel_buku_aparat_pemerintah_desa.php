<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Aparat Pemerintah Desa.xls");
?>
                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="13">
                                        
                                        <center><h3>Daftar Buku Aparat Pemerintah Desa Tahun <?php echo date('Y')?></h3></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <p>Model A 4</p>
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
                                                <th id="tengah">No</th>
                                                <th id="tengah">Nama Lengkap</th>
                                                <th id="tengah">NIAP</th>
                                                <th id="tengah">NIP/NRP</th>
                                                <th id="tengah">Jenis Kelamin</th>
                                                <th id="tengah">Tempat & Tanggal Lahir</th>
                                                <th id="tengah">Agama</th>
                                                <th id="tengah">Pangkat/Golongan</th>
                                                <th id="tengah">Jabatan</th>
                                                <th id="tengah">Pendidikan Terakhir</th>
                                                <th id="tengah">Nomor & Tanggal Keputusan Pengangkatan</th>
                                                <th id="tengah">Nomor & Tanggal Keputusan Pemberhentian</th>
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
                                                        <td id='tengah'>".$row->niap."</td>
                                                        <td id='tengah'>".$row->nip_nrp."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->tempat_tanggal_lahir."</td>
                                                        <td id='tengah'>".$row->agama."</td>
                                                        <td id='tengah'>".$row->pangkat_golongan."</td>
                                                        <td id='tengah'>".$row->jabatan."</td>
                                                        <td id='tengah'>".$row->pendidikan_terakhir."</td>
                                                        <td id='tengah'>".$row->nomor_tanggal_keputusan_pengangkatan."</td>
                                                        <td id='tengah'>".$row->nomor_tanggal_keputusan_pemberhentian."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        
                                                        ";
                                                        ?>
                                                    </td>
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