<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Register jual beli tanah.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="14">
                                <center><h3>Daftar Buku Register Jual Beli Tanah Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="14">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="14">
                                        <p>Model F 2 b</p>
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
                                                <th id="tengah" rowspan="2">Tanggal No Surat Perjanjian (AKTA) / Sertifikat</th>
                                                <th id="tengah" colspan="2">Penjual</th>
                                                <th id="tengah" colspan="2">Pembeli</th>
                                                <th id="tengah" colspan="2">Tanah yang Dijual</th>
                                                <th id="tengah" rowspan="2">Jenis Tanah</th>
                                                <th id="tengah" rowspan="2">Luas Tanah</th>
                                                <th id="tengah" rowspan="2">Batas Tanah</th>
                                                <th id="tengah" rowspan="2">Harga (Rp)</th>
                                                <th id="tengah" rowspan="2">Syarat Lain</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">No Kitir / Gitir</th>
                                                <th id="tengah">No Persil</th>
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
                                                        <td id='tengah'>".$row->tanggal_surat_perjanjian." / ".$row->nomor_surat_perjanjian."</td>
                                                        <td id='tengah'>".$row->nama_penjual."</td>
                                                        <td id='tengah'>".$row->alamat_penjual."</td>
                                                        <td id='tengah'>".$row->nama_pembeli."</td>
                                                        <td id='tengah'>".$row->alamat_pembeli."</td>
                                                        <td id='tengah'>".$row->nomor_kitir_girik_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_persil_tanah."</td>
                                                        <td id='tengah'>".$row->jenis_tanah."</td>
                                                        <td id='tengah'>".$row->luas_tanah."</td>
                                                        <td id='tengah'>".$row->batas_tanah."</td>
                                                        <td id='tengah'>".$row->harga."</td>
                                                        <td id='tengah'>".$row->syarat_lain."</td>
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
