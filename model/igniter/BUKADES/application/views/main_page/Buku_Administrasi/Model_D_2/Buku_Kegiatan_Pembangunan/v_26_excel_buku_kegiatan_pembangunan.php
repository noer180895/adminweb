<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Kegiatan Pembangunan.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="11">
                                <center><h3>Daftar Buku Kegiatan Pembangunan Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <p>Model D 2</p>
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
                                            	<th id="tengah" rowspan="2">Nama Proyek Kegiatan</th>
                                            	<th id="tengah" rowspan="2">Volume</th>
                                                <th id="tengah" colspan="3">Sumber Biaya (Rp)</th>
                                                <th id="tengah" rowspan="2">Waktu Penyelesaian Proyek</th>
                                                <th id="tengah" colspan="2">Sifat Proyek</th>
                                                <th id="tengah" rowspan="2">Pelaksana Proyek</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Pemerintah</th>
                                                <th id="tengah">Swadaya</th>
                                                <th id="tengah">Jumlah</th>
                                                <th id="tengah">Baru</th>
                                                <th id="tengah">Lanjutan</th>
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
                                                        <td id='tengah'>".$row->nama_proyek."</td>
                                                        <td id='tengah'>".$row->volume."</td>
                                                        <td id='tengah'>".$row->pemerintah."</td>
                                                        <td id='tengah'>".$row->swadaya."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td id='tengah'>".$row->waktu_penyelesaian."</td>
                                                        <td id='tengah'>".$row->sifat_proyek_baru."</td>
                                                        <td id='tengah'>".$row->sifat_proyek_lanjutan."</td>
                                                        <td id='tengah'>".$row->pelaksana_proyek."</td>
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
