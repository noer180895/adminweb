<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Register perubahan hak atas tanah.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="13">
                                <center><h3>Daftar Buku Register Perubahan Hak Atas Tanah Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        <p>Model F 2 a</p>
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
                                                <th id="tengah" rowspan="2">Tanggal Perubahan</th>
                                                <th id="tengah" colspan="3">Perubahan Hak Atas Tanah</th>
                                                <th id="tengah" colspan="5">Data Tanah yang Berubah</th>
                                                <th id="tengah" rowspan="2">Tanggal & No Akte Perubahan Hak</th>
                                                <th id="tengah" rowspan="2">Proses Perubahan Hak</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Yang Melepaskan Hak</th>
                                                <th id="tengah">Yang Menerima Hak</th>
                                                <th id="tengah">Jenis dan Kelas</th>
                                                <th id="tengah">No Persil</th>
                                                <th id="tengah">Letak Blok</th>
                                                <th id="tengah">Luas Tanah</th>
                                                <th id="tengah">Batas Keliling</th>
                                                <th id="tengah">Harga (Rp)</th>
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
                                                        <td id='tengah'>".$row->tanggal_perubahan."</td>
                                                        <td id='tengah'>".$row->melepaskan_perubahan_hak_tanah."</td>
                                                        <td id='tengah'>".$row->menerima_perubahan_hak_tanah."</td>
                                                        <td id='tengah'>".$row->jenis_kelas_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_persil."</td>
                                                        <td id='tengah'>".$row->letak_blok."</td>
                                                        <td id='tengah'>".$row->luas_tanah."</td>
                                                        <td id='tengah'>".$row->batas_keliling."</td>
                                                        <td id='tengah'>".$row->harga."</td>
                                                        <td id='tengah'>".$row->tanggal_akte_perubahan." / ".$row->nomor_akte_perubahan."</td>
                                                        <td id='tengah'>".$row->proses_perubahan_hak."</td>
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
