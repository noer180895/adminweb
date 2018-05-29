<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Rencana Pembangunan.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                               <table>
                                   <tr>
                                       <td colspan="9">
                                <center><h3>Daftar Buku Rencana Pembangunan Tahun <?php echo date('Y')?></h3></center>
                                           
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="9">
                                           <br>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="9">
                                           <p>Model D 1</p>
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
                                            	<th id="tengah" rowspan="2">Lokasi</th>
                                                <th id="tengah" colspan="3">Sumber Biaya (Rp)</th>
                                                <th id="tengah" rowspan="2">Pelaksana</th>
                                                <th id="tengah" rowspan="2">Manfaat</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Pemerintah</th>
                                                <th id="tengah">Swadaya</th>
                                                <th id="tengah">Jumlah</th>
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
                                                        <td id='tengah'>".$row->lokasi."</td>
                                                        <td id='tengah'>".$row->pemerintah."</td>
                                                        <td id='tengah'>".$row->swadaya."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        <td id='tengah'>".$row->pelaksana."</td>
                                                        <td id='tengah'>".$row->manfaat."</td>
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
