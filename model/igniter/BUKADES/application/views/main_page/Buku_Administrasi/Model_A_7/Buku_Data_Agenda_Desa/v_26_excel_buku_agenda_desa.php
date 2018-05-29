<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Agenda Desa.xls");
?>

                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="10">
                                <center><h3>Daftar Buku Agenda Desa Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <p>Model A 7</p>
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
                                                <th id="tengah" rowspan="2">No</th>
                                                <th id="tengah" rowspan="2">Tanggal</th>
                                                <th id="tengah" colspan="2">Surat</th>
                                                <th id="tengah" colspan="2">Surat Masuk</th>
                                                <th id="tengah" colspan="3">Surat Keluar</th>
                                                <th id="tengah" rowspan="2">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Nomor</th>
                                            	<th id="tengah">Tanggal</th>
                                            	<th id="tengah">Dari siapa</th>
                                                <th id="tengah">Isi Singkat</th>
                                                <th id="tengah">Isi Singkat</th>
                                                <th id="tengah">Tanggal Pengiriman</th>
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
                                                        <td id='tengah'>".$row->tanggal."</td>
                                                        <td id='tengah'>".$row->nomor_surat."</td>
                                                        <td id='tengah'>".$row->tanggal_surat."</td>
                                                        <td id='tengah'>".$row->surat_masuk_dari."</td>
                                                        <td id='tengah'>".$row->surat_masuk_isi."</td>
                                                        <td id='tengah'>".$row->surat_keluar_isi."</td>
                                                        <td id='tengah'>".$row->surat_keluar_tanggal."</td>
                                                        <td id='tengah'>".$row->alamat."</td>
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
