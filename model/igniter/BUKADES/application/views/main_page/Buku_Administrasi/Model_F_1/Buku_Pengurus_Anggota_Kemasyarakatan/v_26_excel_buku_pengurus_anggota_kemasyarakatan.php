<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Data Pengurus dan Anggota Lembaga Kemasyarakatan.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="10">
                                <center><h3>Daftar Buku Data Pengurus dan Anggota Lembaga Kemasyarakatan Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <p>Model F 1</p>
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
                                                <th id="tengah" rowspan="2">Nama Lembaga</th>
                                                <th id="tengah" colspan="2">Peraturan Desa</th>
                                                <th id="tengah" colspan="5">Pengurus</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Nomor</th>
                                                <th id="tengah">Nama </th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pendidikan</th>
                                                <th id="tengah">Agama</th>
                                                <th id="tengah">Jabatan</th>
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
                                                        <td id='tengah'>".$row->nama_lembaga."</td>
                                                        <td id='tengah'>".$row->tanggal_peraturan_desa."</td>
                                                        <td id='tengah'>".$row->nomor_peraturan_desa."</td>
                                                        <td id='tengah'>".$row->nama_pengurus."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir_pengurus."</td>
                                                        <td id='tengah'>".$row->pendidikan_pengurus."</td>
                                                        <td id='tengah'>".$row->agama_pengurus."</td>
                                                        <td id='tengah'>".$row->jabatan_pengurus."</td>
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
